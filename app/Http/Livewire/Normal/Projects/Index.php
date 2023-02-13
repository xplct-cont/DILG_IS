<?php

namespace App\Http\Livewire\Normal\Projects;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $projectsAll = Project::get();
        return view('livewire.normal.projects.index', compact('$projectsAll'));
    }
}
