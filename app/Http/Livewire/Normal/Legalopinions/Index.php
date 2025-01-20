<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use App\Services\ScraperService;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Index extends Component
{
    use WithPagination;

    protected $scraper;

    public function __construct()
    {
        $this->scraper = new ScraperService();
    }

    public function render(Request $request)
    {
        $cacheKey = 'scraped_legal_opinions';
        $search = $request->get('search');
        $page = $this->page; // Get current page number from Livewire pagination

        // Retrieve data from cache or scrape if not cached
        $result = Cache::remember($cacheKey . "_page_$page", now()->addDay(), function () use ($search, $page) {
            $url = 'https://dilg.gov.ph/legal-opinions-archive/';
            $scrapedData = $this->scraper->scrapeLegalOpinions($url, $search, $page);

            return $scrapedData;
        });

        // Flatten the data into a collection for easier manipulation
        $result = collect($result);

        // Sort the results by date
        $result = $result->sortByDesc(function ($opinion) {
            return strtotime($opinion['date']);
        });

        // Define the number of items per page
        $perPage = 50;

        // Paginate the results manually
        $currentPage = $this->page;
        $offset = ($currentPage - 1) * $perPage;
        $paginatedOpinions = $result->slice($offset, $perPage);

        // Create a LengthAwarePaginator instance
        $paginator = new LengthAwarePaginator(
            $paginatedOpinions,  // Current page data
            $result->count(),    // Total data count
            $perPage,            // Items per page
            $currentPage,        // Current page number
            ['path' => url()->current()]  // Base URL for pagination links
        );

        // Return the view with paginated results
        return view('livewire.normal.legalopinions.index', [
            'opinions' => $paginator,  // Pass the paginator instance
            'total' => $result->count() // Total number of results
        ]);
    }
}
