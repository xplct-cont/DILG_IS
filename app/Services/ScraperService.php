<?php

namespace App\Services;

use App\Models\LegalOpinion;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class ScraperService
{
    /**
     * Scrape the provided URL for legal opinions.
     *
     * @param string $url The URL to scrape.
     * @param string|null $search Optional search term to filter results.
     * @return array An array of legal opinions (titles, links, references, and dates).
     */
    public function scrapeLegalOpinions(string $url, $search = null)
    {
        $client = new Client([
            'timeout' => 60,  // Increase timeout to 60 seconds (or higher as needed)
        ]);
        $allOpinions = [];
        $categories = [];
        $uniqueOpinions = [];

        try {
            $currentPage = 1;

            while ($url) {
                Log::info("Scraping URL (Page {$currentPage}): {$url}");
                $currentPage++;

                $response = $client->request('GET', $url);
                $html = $response->getBody()->getContents();
                $crawler = new Crawler($html);

                // Scrape all rows (handle both altrow and altrow1)
                $opinions = $crawler->filter('table.view_details tr')->each(function (Crawler $node) use ($search) {
                    try {
                        // Extract the data from the row
                        $title = $node->filter('td a')->count() > 0 ? $node->filter('td a')->text() : null;
                        $link = $node->filter('td a')->count() > 0 ? $node->filter('td a')->attr('href') : null;
                        $category = $node->filter('td strong span')->count() > 0 ? $node->filter('td strong span')->text() : null;
                        $reference = $node->filter('td strong')->count() > 0 ? $node->filter('td strong')->text() : null;
                        $date = $node->filter('td[nowrap]')->count() > 0 ? $node->filter('td[nowrap]')->text() : null;

                        // Skip rows without a title or link
                        if (!$title || !$link) {
                            return null;
                        }

                        // Ensure links are fully qualified
                        if (!str_starts_with($link, 'http')) {
                            $link = 'https://dilg.gov.ph' . $link;
                        }

                        // Apply the search filter (if specified)
                        if ($search && stripos($title, $search) === false && stripos($reference, $search) === false) {
                            return null;
                        }

                        // Return the row data
                        return compact('title', 'link', 'category', 'reference', 'date');
                    } catch (\Exception $e) {
                        Log::warning("Skipping a row due to error: " . $e->getMessage());
                        return null;
                    }
                });

                // Remove null rows and avoid duplicates
                $opinions = array_filter($opinions);
                foreach ($opinions as $opinion) {
                    if (!array_key_exists($opinion['reference'], $uniqueOpinions)) {
                        $uniqueOpinions[$opinion['reference']] = $opinion;

                        // Save to the database if not already exists
                        LegalOpinion::updateOrCreate(
                            ['reference' => $opinion['reference']], // Unique constraint
                            [
                                'title' => $opinion['title'],
                                'link' => $opinion['link'],
                                'category' => $opinion['category'],
                                'date' => $opinion['date'],
                            ]
                        );
                    }
                }

                // Scrape categories once (if not already done)
                if (empty($categories)) {
                    $categories = $crawler->filter('form.myformStyle select.catBox option')->each(function (Crawler $node) {
                        return [
                            'value' => $node->attr('value'),
                            'text' => $node->text(),
                        ];
                    });
                }

                // Find the "Next" page link
                $nextPageNode = $crawler->filter('li.pWord a:contains("next")'); // Adjust the selector if necessary
                if ($nextPageNode->count() > 0) {
                    $nextPageHref = $nextPageNode->attr('href');
                    $url = str_starts_with($nextPageHref, 'http') ? $nextPageHref : 'https://dilg.gov.ph' . $nextPageHref;
                } else {
                    $url = null; // No more pages
                    Log::info('No more pages to scrape.');
                }
            }

            return [
                'opinions' => array_values($uniqueOpinions), // Return unique opinions as a flat array
                'categories' => $categories,
            ];
        } catch (\Exception $e) {
            Log::error('Error scraping data: ' . $e->getMessage());
            return ['error' => 'Error scraping data: ' . $e->getMessage()];
        }
    }
}