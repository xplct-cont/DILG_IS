<?php

namespace App\Livewire\Admin\LogsActivity;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Activitylog\Models\Activity;

class Index extends Component
{
    use WithPagination;

    public $event = 'all';
    public $description;
    public $search;
    public $fromDate = null;
    public $toDate = null;

    public function loadLogs()
    {
        $query = Activity::orderBy('created_at', 'desc')
            ->where('causer_id', '!=', 1);

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('event', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->event != 'all') {
            $query->where('event', $this->event);
        }

        if (!empty($this->description)) {
            $query->where('description', 'like', '%' . $this->description . '%');
        }

        if (!empty($this->fromDate) && !empty($this->toDate)) {
            $query->whereDate('created_at', '>=', $this->fromDate)
                  ->whereDate('created_at', '<=', $this->toDate);
        }

        return ['logs' => $query->paginate(12)];
    }

    public function render()
    {
        return view('livewire.admin.logs-activity.index', $this->loadLogs());
    }
}
