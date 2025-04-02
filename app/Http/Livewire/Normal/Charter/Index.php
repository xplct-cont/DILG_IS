<?php

namespace App\Http\Livewire\Normal\Charter;

use Livewire\Component;
use App\Models\Citizens_Charter;
use App\Models\Pdf_Upload_Cit_Charter;

class Index extends Component
{
    public function render()
    {
        $cit_charter = Citizens_Charter::orderBy('id', 'asc')->paginate(1);
        $pdf_cit_charter = Pdf_Upload_Cit_Charter::get();

        return view('livewire.normal.charter.index', compact('cit_charter', 'pdf_cit_charter'));
    }
}
