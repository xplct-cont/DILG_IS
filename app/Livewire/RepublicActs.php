<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RepublicAct;
use Livewire\WithPagination;

class RepublicActs extends Component
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
    $query = RepublicAct::query();

    // Apply search filter
    if ($this->search) {
        $query->where(function ($subQuery) {
            $subQuery->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('reference', 'like', '%' . $this->search . '%')
                ->orWhere('date', 'like', '%' . $this->search . '%');
        });
    }

    // Paginate the results
    $acts = $query->paginate(50);

    return view('livewire.republic-acts', [
        'acts' => $acts,
    ]);
}   
}
