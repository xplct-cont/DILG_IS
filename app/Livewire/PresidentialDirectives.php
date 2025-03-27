<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PresidentialDirective;
use Livewire\WithPagination;

class PresidentialDirectives extends Component
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
    $query = PresidentialDirective::query();

    // Apply search filter
    if ($this->search) {
        $query->where(function ($subQuery) {
            $subQuery->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('reference', 'like', '%' . $this->search . '%')
                ->orWhere('date', 'like', '%' . $this->search . '%');
        });
    }

    // Paginate the results
    $directives = $query->paginate(50);

    return view('livewire.presidential-directives', [
        'directives' => $directives,
    ]);
}   
}
