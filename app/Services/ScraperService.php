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
    $allOpinions = [];
    $categories = []; // Initialize categories to an empty array

    try {
        while ($url) {
            $response = $client->request('GET', $url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            // Scrape opinions
            $opinions = $crawler->filter('table.view_details tr.altrow')->each(function (Crawler $node) {
                return [
                    'title' => $node->filter('td a')->text(),
                    'link' => $node->filter('td a')->attr('href'),
                    'reference' => $node->filter('td strong')->text(),
                    'date' => $node->filter('td[nowrap]')->text(),
                ];
            });

            // Scrape categories
            $categories = $crawler->filter('form.myformStyle select.catBox option')->each(function (Crawler $node) {
                return [
                    'value' => $node->attr('value'),
                    'text' => $node->text(),
                ];
            });

            // Process and filter opinions
            foreach ($opinions as &$opinion) {
                $pdfLink = $opinion['link'];
                if (!str_starts_with($pdfLink, 'http')) {
                    $pdfLink = 'https://dilg.gov.ph' . $pdfLink;
                }
                $opinion['link'] = $pdfLink;

                if ($search && stripos($opinion['title'], $search) === false && stripos($opinion['reference'], $search) === false) {
                    $opinion = null;
                }
            }

            $opinions = array_filter($opinions);
            $allOpinions = array_merge($allOpinions, $opinions);

            // Check for "Next" page
            $nextPageNode = $crawler->filter('a[rel="next"]');
            if ($nextPageNode->count() > 0) {
                $nextPageHref = $nextPageNode->attr('href');
                $url = str_starts_with($nextPageHref, 'http') ? $nextPageHref : 'https://dilg.gov.ph' . $nextPageHref;
            } else {
                $url = null;
            }
        }

        // Ensure the "opinions" key always exists, even if empty
        return [
            'opinions' => $allOpinions, // This ensures "opinions" is always defined
            'categories' => $categories, // This ensures "categories" is always defined
        ];

    } catch (\Exception $e) {
        return ['error' => 'Error scraping data: ' . $e->getMessage()];
    }
}



}
