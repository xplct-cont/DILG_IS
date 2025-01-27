<?php

namespace App\Livewire\Normal\LGU;

use App\Models\Lgu;
use Livewire\Component;
use App\Models\Municipality;

class Index extends Component
{
    public $search, $municipality = 'all';
    public $mayor, $municipality_id, $vice_mayor, $sb_member1, $sb_member2, $sb_member3, $sb_member4, $sb_member5, $sb_member6, $sb_member7, $sb_member8;
    public function loadlgus(){

        $query = Lgu::orderBy('municipality_id', 'asc')
            ->search($this->search);

        if($this->municipality != 'all'){
            $query->where('municipality_id', $this->municipality);
        }
        if($this->mayor){
            $query->where('mayor', $this->mayor);
        }
        if($this->vice_mayor){
            $query->where('vice_mayor', $this->vice_mayor);
        }
        if($this->sb_member1){
            $query->where('sb_member1', $this->sb_member1);
        }
        if($this->sb_member2){
            $query->where('sb_member2', $this->sb_member2);
        }
        if($this->sb_member3){
            $query->where('sb_member3', $this->sb_member3);
        }
        if($this->sb_member4){
            $query->where('sb_member4', $this->sb_member4);
        }
        if($this->sb_member5){
            $query->where('sb_member5', $this->sb_member5);
        }
        if($this->sb_member6){
            $query->where('sb_member6', $this->sb_member6);
        }
        if($this->sb_member7){
            $query->where('sb_member7', $this->sb_member7);
        }
        if($this->sb_member8){
            $query->where('sb_member8', $this->sb_member8);
        }

        $lgus = $query->get();
        return compact('lgus');
    }
    public function render()
    {
        $lgusfilter = Lgu::where('municipality_id', 'like', '%'.$this->search.'%')
            ->orWhere('mayor', 'like', '%'.$this->search.'%')
            ->orWhere('vice_mayor', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member1', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member2', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member3', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member4', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member5', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member6', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member7', 'like', '%'.$this->search.'%')
            ->orWhere('sb_member8', 'like', '%'.$this->search.'%')
            ->orderBy('municipality_id', 'asc')->get();
        return view('livewire.normal.l-g-u.index',
                ['lgusfilter' => $lgusfilter, 'municipalities' => Municipality::all()],
                $this->loadlgus());
    }
}
