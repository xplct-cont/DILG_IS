<?php

namespace App\Livewire;

use Livewire\Component;

class ShowActs extends Component
{
    public $act;  // Declare the $opinion property

    public function mount($act) // Use the mount method to pass the opinion
    {
        $this->act = $act;
    }

    public function render()
    {
        return view('livewire.show-acts');
    }
}
