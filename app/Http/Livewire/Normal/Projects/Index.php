<?php

namespace App\Http\Livewire\Normal\Projects;

use App\Models\Program;
use App\Models\Project;
use Livewire\Component;
use App\Models\Municipality;

class Index extends Component
{
    public $search, $program_id = 'all', $municipality = 'all', $status;
    public $proj_code, $title, $exact_loc, $year, $description, $type;
    public function loadProjects(){

        $query = Project::orderBy('year', 'asc')
            ->search($this->search);

        if($this->title){
            $query->where('title', $this->title);
        }
        if($this->proj_code){
            $query->where('proj_code', $this->proj_code);
        }
        if($this->exact_loc){
            $query->where('exact_loc', $this->exact_loc);
        }
        if($this->year){
            $query->where('year', $this->year);
        }
        if($this->description){
            $query->where('description', $this->description);
        }
        if($this->type){
            $query->where('type', $this->type);
        }
        if($this->program_id != 'all'){
            $query->where('program_id', $this->program_id);
        }
        if($this->municipality != 'all'){
            $query->where('municipality_id', $this->municipality);
        }

        $projectsAll = $query->paginate(5);
        return compact('projectsAll');
    }
    public function render()
    {
        $projectsAll = Project::get();
        $projects = Project::where('program_id', 'like', '%'.$this->search.'%')
        ->orWhere('municipality_id', 'like', '%'.$this->search.'%')
        ->orWhere('description', 'like', '%'.$this->search.'%')
        ->orWhere('status', 'like', '%'.$this->search.'%')
        ->orWhere('type', 'like', '%'.$this->search.'%')
        ->orWhere('title', 'like', '%'.$this->search.'%')
        ->orderBy('year', 'asc')->paginate(5);
        return view('livewire.normal.projects.index',
                    ['projects' => $projects, 'programs'=> Program::all(), 'municipalities' => Municipality::all()]
                    , $this->loadProjects(), compact('projectsAll'));
    }
}
