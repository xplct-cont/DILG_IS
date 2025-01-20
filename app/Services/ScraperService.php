<?php

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class ScraperService
{
    /**
     * Scrape the provided URL for legal opinions, iterating through pages.
     *
     * @param string $url The URL to scrape.
     * @param string|null $search Optional search term to filter results.
     * @param int $page The page number to scrape.
     * @return array An array of legal opinions (titles, links, references, and dates).
     */
    public function scrapeLegalOpinions(string $url, ?string $search, int $page)
    {
        $client = new Client();
        $allOpinions = [];

        try {
            // Construct the URL to include the page number
            $pageUrl = $url . "?page=" . $page; // Assuming the pagination URL format is like '?page=1'

            // Fetch the content of the page
            $response = $client->request('GET', $pageUrl);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            // Extract data from the current page
            $opinions = $crawler->filter('table.view_details tr.altrow')->each(function (Crawler $node) {
                try {
                    return [
                        'title' => $node->filter('td a')->text(),
                        'link' => $node->filter('td a')->attr('href'),
                        'reference' => $node->filter('td strong')->text(),
                        'date' => $node->filter('td[nowrap]')->text(),
                    ];
                } catch (\Exception $e) {
                    return null; // Skip rows with missing data
                }
            });

            // Remove null entries
            $opinions = array_filter($opinions, function ($opinion) {
                return is_array($opinion) &&
                    isset($opinion['title'], $opinion['link'], $opinion['reference'], $opinion['date']);
            });

            // Merge the opinions of the current page into the allOpinions array
            $allOpinions = array_merge($allOpinions, $opinions);

            return $allOpinions;

        } catch (\Exception $e) {
            // Log and return an empty array in case of an error
            \App\Models\Log::error("Error scraping legal opinions: " . $e->getMessage());
            return [];
        }
    }
}
