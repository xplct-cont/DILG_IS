<?php

namespace App\Http\Livewire\Normal\Charter;

use Livewire\Component;
use App\Models\Citizens_Charter;

class Index extends Component
{
    public function render()
    {
        $cit_charter = Citizens_Charter::orderBy('id', 'asc')->paginate(1);
        return view('livewire.normal.charter.index', compact('cit_charter'));
    }
}
