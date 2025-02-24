<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LegalOpinion;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory = '';
    public $loFilter = ''; // Added LO- filter
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function updatingLoFilter() // Reset pagination when LO- filter changes
    {
        $this->resetPage();
    }

    public function render()
    {
        // Fetch unique categories for dropdown
        $categories = LegalOpinion::distinct('category')
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->orderBy('category', 'asc')
            ->pluck('category');

        // Build the base query
        $query = LegalOpinion::query();

        // Apply category filter
        if (!empty($this->selectedCategory)) {
            $query->where('category', 'like', '%' . $this->selectedCategory . '%');
        }

        // Apply search filter
        if (!empty($this->search)) {
            $query->where(function ($subQuery) {
                $subQuery->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('reference', 'like', '%' . $this->search . '%')
                    ->orWhere('date', 'like', '%' . $this->search . '%');
            });
        }

          // Apply LO- filter dynamically
        if ($this->loFilter === 'lo_only') {
            $query->where('title', 'LIKE', 'LO-%');
        } elseif ($this->loFilter === 'dilg_lo') {
            $query->where('title', 'LIKE', 'DILG LO No.%');
        } elseif ($this->loFilter === 'both') {
            $query->where(function ($subQuery) {
                $subQuery->where('title', 'LIKE', 'LO-%')
                    ->orWhere('title', 'LIKE', 'DILG LO No.%');
            });
        }

        // Paginate the final results
        $opinions = $query->paginate(50);

        return view('livewire.normal.legalopinions.index', [
            'opinions' => $opinions,
            'categories' => $categories,
        ]);
    }
}
