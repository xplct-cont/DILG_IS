<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use App\Services\ScraperService;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'bootstrap'; // Set pagination theme to Bootstrap

    protected $scraper;

    // Inject the ScraperService in the constructor
    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->scraper = new ScraperService();  // Initialize the scraper service
    }

    public function updatingSearch()
    {
        // Reset pagination when search input changes
        $this->resetPage();
    }

    public function render(Request $request)
{
    $cacheKey = 'scraped_legal_opinions';
    $result = Cache::get($cacheKey);

    if (!$result) {
        try {
            $url = 'https://dilg.gov.ph/legal-opinions-archive/';
            $result = $this->scraper->scrapeLegalOpinions($url);
            Cache::put($cacheKey, $result, now()->addDay());
        } catch (\Exception $e) {
            \App\Models\Log::error("Error scraping legal opinions: " . $e->getMessage());
            return view('Scraper.error', ['error' => 'Unable to fetch legal opinions at this time.']);
        }
    }

    // Convert result to a collection and filter out invalid data
    $result = collect($result)->filter(function ($opinion) {
        return isset($opinion['title'], $opinion['reference'], $opinion['date']);
    });

    // Apply search filtering
    $search = $this->search;
    if ($search) {
        $result = $result->filter(function ($opinion) use ($search) {
            return stripos($opinion['title'], $search) !== false ||
                   stripos($opinion['reference'], $search) !== false ||
                   stripos($opinion['date'], $search) !== false;
        });
    }

    // Sort results by date
    $result = $result->sortByDesc(function ($opinion) {
        return strtotime($opinion['date']);
    });

    // Pagination logic: 20 items per page
    $perPage = 20;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $paginatedResults = new LengthAwarePaginator(
        $result->forPage($currentPage, $perPage),
        $result->count(),
        $perPage,
        $currentPage,
        ['path' => LengthAwarePaginator::resolveCurrentPath()]
    );

    // Return the view with paginated results
    return view('livewire.normal.legalopinions.index', [
        'opinions' => $paginatedResults,
        'currentPage' => $currentPage,
    ]);
}

}
