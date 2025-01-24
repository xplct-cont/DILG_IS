<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use App\Models\LegalOpinion; // Assuming you have a LegalOpinion model
use Livewire\Component;
use Livewire\WithPagination;

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
    // Query distinct categories directly from the database, ordered from last to first
    $categories = LegalOpinion::distinct('category')
    ->whereNotNull('category') // Optional: filters out null categories if needed
    ->where('category', '!=', '') // Optional: filters out empty categories
    ->orderBy('category', 'asc') // Order categories in alphabetical order (A to Z)
    ->pluck('category');

    
    // Build the query for opinions
    $query = LegalOpinion::query();
    
    // Apply category filter if selected
    if ($this->selectedCategory) {
        $query->where('category', 'like', '%' . $this->selectedCategory . '%');
    }
    
    // Apply search filter
    if ($this->search) {
        $query->where(function ($q) {
            $q->where('title', 'like', '%' . $this->search . '%')
              ->orWhere('reference', 'like', '%' . $this->search . '%')
              ->orWhere('date', 'like', '%' . $this->search . '%');
        });
    }
    
    // Paginate the opinions
    $opinions = $query->paginate(50);
    
    return view('livewire.normal.legalopinions.index', [
        'opinions' => $opinions,
        'categories' => $categories,
    ]);
}

    
}
