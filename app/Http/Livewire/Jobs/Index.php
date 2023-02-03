<?php

namespace App\Http\Livewire\Jobs;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $positon, $details;

    public function loadJobs(){

        $query = Jobs::orderBy('position', 'asc')
            ->search($this->search);

        if($this->position){
            $query->where('position', $this->position);
        }
        if($this->details){
            $query->where('details', $this->details);
        }

        $jobs = $query->paginate(2);
        return compact('jobs');
    }
    public function render()
    {
        return view('livewire.jobs.index', $this->loadJobs());
    }
}
