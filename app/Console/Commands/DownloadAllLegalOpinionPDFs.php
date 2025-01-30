<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\LegalOpinion;
use Illuminate\Support\Facades\Storage;

class DownloadAllLegalOpinionPDFs extends Command
{
    protected $signature = 'download:legal-opinions';
    protected $description = 'Download all legal opinion PDFs from the DILG website';

    public function handle()
    {
        // Archive page containing links to legal opinions
        $archiveUrl = 'https://dilg.gov.ph/legal-opinions-archive/';
        $this->info("Fetching the archive page: $archiveUrl");

        $response = Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0',
            'Referer' => 'https://dilg.gov.ph/',
        ])->timeout(120) // Set timeout to 60 seconds
          ->get($archiveUrl);

        if (!$response->successful()) {
            $this->error("Failed to fetch the archive page.");
            return 1;
        }

        $htmlContent = $response->body();
        $crawler = new Crawler($htmlContent);

        // Extract the links to individual legal opinion pages
        $opinionLinks = $crawler->filter('a')->each(function (Crawler $node) {
            $href = $node->attr('href');
            if ($href && str_contains($href, '/legal-opinions/')) {
                return $href;
            }
            return null;
        });

        $opinionLinks = array_unique(array_filter($opinionLinks));

        if (empty($opinionLinks)) {
            $this->warn("No legal opinions found.");
            return 0;
        }

        $this->info("Found " . count($opinionLinks) . " legal opinions. Processing each...");

        $storagePath = storage_path('app/public/legal_opinions');
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0777, true);
        }

        foreach ($opinionLinks as $relativeUrl) {
            $opinionUrl = str_starts_with($relativeUrl, 'http') ? $relativeUrl : rtrim('https://dilg.gov.ph', '/') . $relativeUrl;
            $this->info("Fetching opinion page: $opinionUrl");

            $opinionPageResponse = Http::withHeaders([
                'User-Agent' => 'Mozilla/5.0',
                'Referer' => 'https://dilg.gov.ph/',
            ])->get($opinionUrl);

            if (!$opinionPageResponse->successful()) {
                $this->error("Failed to fetch opinion page: $opinionUrl");
                continue;
            }

            $opinionPageContent = $opinionPageResponse->body();
            $crawler = new Crawler($opinionPageContent);

            // Extract the PDF download link
            $pdfLink = $crawler->filter('a.btn_download')->attr('href');
            if ($pdfLink) {
                if (!str_contains($pdfLink, 'http')) {
                    $pdfLink = rtrim('https://dilg.gov.ph', '/') . $pdfLink;
                }

                $pdfFileName = basename($pdfLink);
                $filePath = "$storagePath/$pdfFileName";

                $pdfResponse = Http::get($pdfLink);
                if ($pdfResponse->successful()) {
                    file_put_contents($filePath, $pdfResponse->body());
                    $this->info("Saved PDF: $filePath");

                    // Extract other information (e.g., title, reference, etc.)
                    $title = $crawler->filter('h1')->text();
                    $category = 'Legal Opinion'; // You may need to extract this if it's on the page
                    $reference = basename($pdfLink); // Assuming reference is the PDF file name
                    $date = now(); // Use the current timestamp, or extract it if available on the page

                    // Save to database
                    LegalOpinion::create([
                        'pdf' => $filePath,
                    ]);
                } else {
                    $this->error("Failed to download PDF: $pdfFileName");
                }
            } else {
                $this->warn("No PDF link found on opinion page: $opinionUrl");
            }
        }

        $this->info("All legal opinion PDFs have been processed!");
        return 0;
    }
}
