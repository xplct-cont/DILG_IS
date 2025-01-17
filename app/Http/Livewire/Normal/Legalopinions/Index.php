<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Services\ScraperService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'tailwind'; // Ensure the pagination matches Tailwind CSS styles

    public function updatingSearch()
    {
        // Reset pagination when search input changes
        $this->resetPage();
    }

    public function render(Request $request)
{
    $cacheKey = 'scraped_legal_opinions';

    // Check if data is cached
    $result = Cache::get($cacheKey);

    if (!$result) {
        try {
            $url = 'https://dilg.gov.ph/legal-opinions-archive/';
            $result = $this->scraper->scrapeLegalOpinions($url);
            Cache::put($cacheKey, $result, now()->addDay());
        } catch (\Exception $e) {
            return view('Scraper.error', ['error' => 'Unable to fetch legal opinions at this time.']);
        }
    }

    // Convert $result to a collection
    $result = collect($result);

    // Search functionality
    $search = $request->get('search');
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

    // Pagination logic
    $perPage = 50;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $paginatedResults = new LengthAwarePaginator(
        $result->forPage($currentPage, $perPage),
        $result->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    // Return the view with paginated results
    return view('livewire.normal.legalopinions.index', [
        'opinions' => $paginatedResults,
    ]);
}

}

