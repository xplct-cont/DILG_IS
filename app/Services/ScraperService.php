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
        $client = new Client(['timeout' => 60]); // Extended timeout
        $uniqueOpinions = [];
        $categories = [];
    
        try {
            $currentPage = 1;
    
            while ($url) {
                Log::info("Scraping URL (Page {$currentPage}): {$url}");
                $currentPage++;
    
                $response = $client->request('GET', $url);
                $html = $response->getBody()->getContents();
                $crawler = new Crawler($html);
    
                $opinions = $crawler->filter('table.view_details tr')->each(function (Crawler $node) use ($search) {
                    try {
                        $title = $node->filter('td a')->count() > 0 ? $node->filter('td a')->text() : null;
                        $link = $node->filter('td a')->count() > 0 ? $node->filter('td a')->attr('href') : null;
                        $category = $node->filter('td strong span')->count() > 0 ? $node->filter('td strong span')->text() : null;
                        $reference = $node->filter('td strong')->count() > 0 ? $node->filter('td strong')->text() : null;
                        $date = $node->filter('td[nowrap]')->count() > 0 ? $node->filter('td[nowrap]')->text() : null;
    
                        if (!$title || !$link) return null;
    
                        if (!str_starts_with($link, 'http')) {
                            $link = 'https://dilg.gov.ph' . $link;
                        }
    
                        if ($search && stripos($title, $search) === false && stripos($reference, $search) === false) {
                            return null;
                        }
    
                        return compact('title', 'link', 'category', 'reference', 'date');
                    } catch (\Exception $e) {
                        Log::warning("Skipping row due to error: {$e->getMessage()}");
                        return null;
                    }
                });
    
                $opinions = array_filter($opinions);
    
                foreach ($opinions as $opinion) {
                    if (!array_key_exists($opinion['reference'], $uniqueOpinions)) {
                        $uniqueOpinions[$opinion['reference']] = $opinion;
    
                        LegalOpinion::updateOrCreate(
                            ['reference' => $opinion['reference']],
                            [
                                'title' => $opinion['title'],
                                'link' => $opinion['link'],
                                'category' => $opinion['category'],
                                'date' => $opinion['date'],
                            ]
                        );
                    }
                }
    
                if (empty($categories)) {
                    $categories = $crawler->filter('form.myformStyle select.catBox option')->each(function (Crawler $node) {
                        return [
                            'value' => $node->attr('value'),
                            'text' => $node->text(),
                        ];
                    });
                }
    
                $nextPageNode = $crawler->filter('li.pWord a:contains("next")');
                if ($nextPageNode->count() > 0) {
                    $nextPageHref = $nextPageNode->attr('href');
                    $url = str_starts_with($nextPageHref, 'http') ? $nextPageHref : 'https://dilg.gov.ph' . $nextPageHref;
                } else {
                    $url = null;
                    Log::info('No more pages to scrape.');
                }
            }
    
            return [
                'opinions' => array_values($uniqueOpinions),
                'categories' => $categories,
            ];
        } catch (\Exception $e) {
            Log::error('Error scraping data: ' . $e->getMessage());
            return ['error' => 'Error scraping data: ' . $e->getMessage()];
        }
    }
}