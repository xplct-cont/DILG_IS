<?php

namespace App\Livewire\Normal\LegalOpinions;

use Livewire\Component;

class ShowOpinion extends Component
{
    public $opinion;  // Declare the $opinion property

    public function mount($opinion) // Use the mount method to pass the opinion
    {
        $this->opinion = $opinion;
    }

    public function render()
    {
        return view('livewire.normal.legal-opinions.show-opinion');
    }
}
