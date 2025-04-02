<?php

namespace App\Http\Livewire\Normal\FieldOfficers;

use Livewire\Component;
use App\Models\Municipality;
use App\Models\Field_Officer;

class Index extends Component
{
    public $search, $municipality = 'all';
    public $fname, $lname, $cluster, $municipality_id;
    public function loadOfficers(){

        $query = Field_Officer::orderBy('municipality_id', 'asc')
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
        $municipalities = Municipality::orderBy('municipality', 'ASC')->get();
        return view('livewire.normal.field-officers.index', compact('municipalities'), $this->loadOfficers());
    }
}
