<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use App\Services\ScraperService;
use Livewire\Component;
use App\Models\LegalOpinion;
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

    public function updatingSearch()
    {
        $this->resetPage();
    }
    

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
{
    // Query distinct categories directly from the database
    $categories = LegalOpinion::distinct('category')
        ->whereNotNull('category')
        ->where('category', '!=', '')
        ->orderBy('category', 'asc')
        ->pluck('category');

    // Build the query for opinions
    $query = LegalOpinion::query();

    // Apply category filter if selected
    if ($this->selectedCategory) {
        $query->where('category', 'like', '%' . $this->selectedCategory . '%');
    }

    // Apply search filter
    if ($this->search) {
        $query->where(function ($subQuery) {
            $subQuery->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('reference', 'like', '%' . $this->search . '%')
                ->orWhere('date', 'like', '%' . $this->search . '%');
        });
    }

    // Paginate the results
    $opinions = $query->paginate(50);

    return view('livewire.normal.legalopinions.index', [
        'opinions' => $opinions,
        'categories' => $categories,
    ]);
}   
}