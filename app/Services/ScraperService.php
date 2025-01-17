<?php

namespace App\Services;

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
        $client = new Client();
        $allOpinions = []; // To store all scraped opinions

        try {
            while ($url) {
                // Fetch the current page
                $response = $client->request('GET', $url);
                $html = $response->getBody()->getContents();
                $crawler = new Crawler($html);

                // Scrape opinions from the current page
                $opinions = $crawler->filter('table.view_details tr.altrow')->each(function (Crawler $node) {
                    return [
                        'title' => $node->filter('td a')->text(),
                        'link' => $node->filter('td a')->attr('href'),
                        'reference' => $node->filter('td strong')->text(),
                        'date' => $node->filter('td[nowrap]')->text(),
                    ];
                });

                // Process each opinion
                foreach ($opinions as &$opinion) {
                    $pdfLink = $opinion['link'];

                    // Ensure the link is complete by prepending the base URL if necessary
                    if (!str_starts_with($pdfLink, 'http')) {
                        $pdfLink = 'https://dilg.gov.ph' . $pdfLink;
                    }

                    $opinion['link'] = $pdfLink;

                    // If a search term is provided, only keep opinions that match the search term
                    if ($search && stripos($opinion['title'], $search) === false && stripos($opinion['reference'], $search) === false) {
                        $opinion = null; // Remove opinions that do not match the search term
                    }
                }

                // Filter out null opinions (those that didn't match the search)
                $opinions = array_filter($opinions);

                $allOpinions = array_merge($allOpinions, $opinions);

                // Check for the "Next" page link
                $nextPageNode = $crawler->filter('a[rel="next"]');
                if ($nextPageNode->count() > 0) {
                    $nextPageHref = $nextPageNode->attr('href');

                    // Handle relative URLs
                    $url = str_starts_with($nextPageHref, 'http') 
                        ? $nextPageHref 
                        : 'https://dilg.gov.ph' . $nextPageHref;
                } else {
                    $url = null; // Stop the loop if no "Next" page is found
                }
            }

            return $allOpinions;

        } catch (\Exception $e) {
            return ['error' => 'Error scraping data: ' . $e->getMessage()];
        }
    }
}
