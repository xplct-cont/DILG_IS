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
    public $selectedCategory = '';
    protected $paginationTheme = 'bootstrap';
    protected $scraper;
    
    // Use the mount method to inject the service
    public function mount(ScraperService $scraper)
    {
        $this->scraper = app(ScraperService::class);
    }
    

    public function updatingSearch()
    {
        \Log::info('Search updated: ' . $this->search);
        $this->resetPage();
    }

    public function updatingSelectedCategory()
    {
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
            return view('Scraper.error', ['error' => 'Unable to fetch legal opinions at this time.']);
        }
    }

    $opinions = collect($result['opinions'] ?? []);
    $categories = $result['categories'] ?? [];

    // Log the selected category and opinion categories for debugging
    \Log::info('Selected Category for Filter: ' . $this->selectedCategory);
    foreach ($opinions as $opinion) {
        \Log::info('Opinion Category: ' . $opinion['category']);
    }

    // Normalize the opinion categories
    $opinions = $opinions->map(function ($opinion) {
        $opinion['category'] = strtolower(trim($opinion['category'])); // Normalize to lowercase
        return $opinion;
    });

    // Apply the category filter
    if ($this->selectedCategory) {
        $opinions = $opinions->filter(function ($opinion) {
            return str_contains(strtolower(trim($opinion['category'])), strtolower(trim($this->selectedCategory)));
        });
    }

    // Apply the search filter
    if ($this->search) {
        $opinions = $opinions->filter(function ($opinion) {
            return stripos($opinion['title'], $this->search) !== false ||
                stripos($opinion['reference'], $this->search) !== false ||
                stripos($opinion['date'], $this->search) !== false;
        });
    }

    // Sort opinions by date
    $opinions = $opinions->sortByDesc(function ($opinion) {
        return strtotime($opinion['date']);
    });

    // Pagination
    $perPage = 50;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $paginatedResults = new LengthAwarePaginator(
        $opinions->forPage($currentPage, $perPage),
        $opinions->count(),
        $perPage,
        $currentPage,
        ['path' => LengthAwarePaginator::resolveCurrentPath()]
    );

    return view('livewire.normal.legalopinions.index', [
        'opinions' => $paginatedResults,
        'currentPage' => $currentPage,
        'categories' => $categories,
    ]);
}

}
