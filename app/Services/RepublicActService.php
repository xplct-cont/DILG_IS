<?php

namespace App\Services;

use App\Models\RepublicAct;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class RepublicActService
{
    /**
     * Scrape the provided URL for legal opinions.
     *
     * @param string $url The URL to scrape.
     * @param string|null $search Optional search term to filter results.
     * @return array An array of legal opinions (titles, links, references, and dates).
     */
    public function scrapeRepublicacts(string $url, $search = null)
    {
        $client = new Client([
            'timeout' => 60,  // Increase timeout to 60 seconds
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
            ]
        ]);

        $uniqueActs = [];

        try {
            $currentPage = 1;

            while ($url) {
                Log::info("Scraping URL (Page {$currentPage}): {$url}");
                $currentPage++;

                $response = $client->request('GET', $url);
                $html = $response->getBody()->getContents();
                $crawler = new Crawler($html);

                // Log full HTML to check if content is loaded
                Log::info("Full HTML content: " . substr($html, 0, 500)); // Logs first 500 chars for debugging

                // Check if the table exists
                if ($crawler->filter('table.view_details')->count() === 0) {
                    Log::warning("Table 'view_details' not found on page.");
                    break; // Stop scraping if table is missing
                }

                // Log first row HTML
                $firstRow = $crawler->filter('table.view_details tr')->first();
                if ($firstRow->count() > 0) {
                    Log::info("First row HTML: " . $firstRow->html());
                }

                // Scrape all rows
                $acts = $crawler->filter('table.view_details tr')->each(function (Crawler $node) use ($client, $search) {
                    try {
                        // Extract main data
                        $title = $node->filter('td a')->count() > 0 ? $node->filter('td a')->text() : null;
                        $link = $node->filter('td a')->count() > 0 ? $node->filter('td a')->attr('href') : null;
                        $reference = $node->filter('td strong')->count() > 0 ? $node->filter('td strong')->text() : null;
                        $date = $node->filter('td[nowrap]')->count() > 0 ? $node->filter('td[nowrap]')->text() : null;

                        if ($reference) {
                            $reference = trim(str_replace('Reference No:', '', $reference));
                        }

                        if (!$title || !$link) {
                            Log::warning("Skipping row due to missing title or link: " . $node->html());
                            return null;
                        }

                        if (!str_starts_with($link, 'http')) {
                            $link = 'https://dilg.gov.ph' . $link;
                        }

                        if ($search && stripos($title, $search) === false && stripos($reference, $search) === false) {
                            return null;
                        }

                        // **Step 2: Scrape the download link from the individual page**
                        $downloadLink = null;
                        try {
                            $response = $client->request('GET', $link);
                            $detailHtml = $response->getBody()->getContents();
                            $detailCrawler = new Crawler($detailHtml);

                            // Extract the actual PDF download link
                            $downloadNode = $detailCrawler->filter('a.btn_download');
                            if ($downloadNode->count() > 0) {
                                $downloadLink = $downloadNode->attr('href');

                                // Ensure the link is fully qualified
                                if ($downloadLink && !str_starts_with($downloadLink, 'http')) {
                                    $downloadLink = 'https://dilg.gov.ph' . $downloadLink;
                                }
                            }
                        } catch (\Exception $e) {
                            Log::warning("Failed to fetch download link for {$title}: " . $e->getMessage());
                        }

                        // Return scraped data
                        return compact('title', 'link', 'reference', 'date', 'downloadLink');
                    } catch (\Exception $e) {
                        Log::warning("Skipping a row due to error: " . $e->getMessage());
                        return null;
                    }
                });

                $acts = array_filter($acts);
                foreach ($acts as $act) {
                    if (!array_key_exists($act['reference'], $uniqueActs)) {
                        $uniqueActs[$act['reference']] = $act;

                        // **Store the download link in the database**
                        RepublicAct::updateOrCreate(
                            ['reference' => $act['reference']], // Unique constraint
                            [
                                'title' => $act['title'],
                                'link' => $act['link'],
                                'date' => $act['date'],
                                'download_link' => $act['downloadLink'], // <-- Store the download link
                            ]
                        );
                    }
                }

                // **Improved Pagination Handling**
                $nextPageNode = $crawler->filter('li.pWord a:contains("next")');
                if ($nextPageNode->count() > 0) {
                    $nextPageHref = $nextPageNode->attr('href');
                    if ($nextPageHref) {
                        $url = str_starts_with($nextPageHref, 'http') ? $nextPageHref : 'https://dilg.gov.ph' . $nextPageHref;
                    } else {
                        Log::info('Next page link found, but no valid href attribute.');
                        break;
                    }
                } else {
                    $url = null;
                    Log::info('No more pages to scrape.');
                }
            }

            return [
                'acts' => array_values($uniqueActs),
            ];
        } catch (\Exception $e) {
            Log::error('Error scraping data: ' . $e->getMessage());
            return ['error' => 'Error scraping data: ' . $e->getMessage()];
        }
    }
}
