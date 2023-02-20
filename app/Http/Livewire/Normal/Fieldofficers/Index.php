<?php

namespace App\Http\Livewire\Normal\Fieldofficers;

use Livewire\Component;
use App\Models\Municipality;
use App\Models\Field_Officer;

class Index extends Component
{
    public $search, $municipality = 'all';
    public $fname, $lname, $cluster, $municipality_id;
    public function loadOfficers(){

        $query = Field_Officer::orderBy('fname', 'asc')
            ->search($this->search);

            if($this->municipality != 'all'){
                $query->where('municipality_id', $this->municipality);
            }
            if($this->fname){
                $query->where('fname', $this->fname);
            }
            if($this->lname){
                $query->where('lname', $this->lname);
            }
            if($this->cluster){
                $query->where('cluster', $this->cluster);
            }

            $field_officers = $query->get();
            return compact('field_officers');
    }
    public function render()
    {
        $field_officersfilter = Field_Officer::where('municipality_id', 'like', '%'.$this->search.'%')
            ->where('fname', 'like', '%'.$this->search.'%')
            ->orWhere('lname', 'like', '%'.$this->search.'%')
            ->orWhere('cluster', 'like', '%'.$this->search.'%')
            ->orderBy('municipality_id', 'asc')->get();
        return view('livewire.normal.fieldofficers.index',
        ['field_officersfilter' => $field_officersfilter, 'municipalities' => Municipality::all()],
        $this->loadOfficers());
    }
}
