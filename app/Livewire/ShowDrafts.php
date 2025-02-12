<?php

namespace App\Livewire;

use Livewire\Component;

class ShowDrafts extends Component
{
    public $draft;  // Declare the $opinion property

    public function mount($draft) // Use the mount method to pass the opinion
    {
        $this->draft = $draft;
    }

    public function render()
    {
        return view('livewire.show-drafts');
    }
}
