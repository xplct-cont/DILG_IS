<?php

namespace App\Http\Livewire\Admin\LogsActivity;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class Index extends Component
{

    public $event = 'all', $description;

    public $search;
    public $fromDate = null;
    public $toDate = null;
    public function loadLogs(){

        $query = Activity::orderBy('created_at', 'desc')
            ->search($this->search);

        if($this->event != 'all'){
            $query->where('event', $this->event);
        }
        if($this->description){
            $query->where('description', $this->description);
        }
        if(($this->fromDate && $this->toDate) != null){
            $query->whereDate('created_at', '>=', $this->fromDate)
                ->whereDate('created_at', '<=', $this->toDate);
        }
        $logs = $query->paginate(12);
        return compact('logs');
    }
    public function render()
    {
        $logs = Activity::where('causer_id', '!=', 1)->get();
        $logsFilter = Activity::where('event', 'like', '%'.$this->search.'%')
        ->orWhere('description', 'like', '%'.$this->search.'%')
        ->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.logs-activity.index', $this->loadLogs(),
        ['logs'=> Activity::where('causer_id', '!=', 1)->get(), 'logsFilter' => $logsFilter]);
    }
}
