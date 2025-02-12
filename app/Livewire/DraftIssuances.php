<?php

namespace App\Livewire;

use App\Models\DraftIssuance;
use Livewire\Component;
use Livewire\WithPagination;

class DraftIssuances extends Component
{

    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
{

    // Build the query for opinions
    $query = DraftIssuance::query();

    // Apply search filter
    if ($this->search) {
        $query->where(function ($subQuery) {
            $subQuery->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('reference', 'like', '%' . $this->search . '%')
                ->orWhere('date', 'like', '%' . $this->search . '%');
        });
    }

    // Paginate the results
    $drafts = $query->paginate(50);

    return view('livewire.draft-issuances', [
        'drafts' => $drafts,
    ]);
}   
}
