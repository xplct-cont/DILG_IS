<?php

namespace App\Http\Livewire\Normal\Jobs;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $positon, $details;

    public function loadJobs(){

        $query = Job::orderBy('position', 'asc')
            ->search($this->search);

        if($this->details){
            $query->where('details', $this->details);
        }

        $jobs = $query->paginate(2);
        return compact('jobs');
    }
    public function render()
    {
        return view('livewire.normal.jobs.index', $this->loadJobs(), ['jobs'=> Job::latest()->get()]);
    }

}
