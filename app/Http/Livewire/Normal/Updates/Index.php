<?php

namespace App\Http\Livewire\Normal\Updates;

use App\Models\Update;
use Livewire\Component;

class Index extends Component
{
    public $title, $caption;

    public $search;
    public $fromDate = null;
    public $toDate = null;

    public function loadUpdates(){

        $query = Update::where('status', true)->orderBy('created_at', 'desc')
            ->search($this->search);

        if($this->title){
            $query->where('title', $this->title);
        }
        if($this->caption){
            $query->where('caption', $this->caption);
        }
        if(($this->fromDate && $this->toDate) != null){
            $query->whereDate('created_at', '>=', $this->fromDate)
                ->whereDate('created_at', '<=', $this->toDate);
        }
        $updates = $query->paginate(5);
        return compact('updates');
    }
    public function render()
    {
        $updates = Update::get();
        $updatesFilter = Update::where('title', 'like', '%'.$this->search.'%')
        ->orWhere('caption', 'like', '%'.$this->search.'%')
        ->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.normal.updates.index',  $this->loadUpdates(),
         ['updates'=> Update::get(), 'updatesFilter' => $updatesFilter],);
    }
}
