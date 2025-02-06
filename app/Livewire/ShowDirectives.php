<?php

namespace App\Livewire;

use Livewire\Component;

class ShowDirectives extends Component
{
    public $directive;  // Declare the $opinion property

    public function mount($directive) // Use the mount method to pass the opinion
    {
        $this->directive = $directive;
    }

    public function render()
    {
        return view('livewire.show-directives');
    }
}
