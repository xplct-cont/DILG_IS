<?php

namespace App\Http\Livewire\Normal\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $title;
    public $dateRange = null;
    public $fromDate = null;
    public $toDate = null;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function loadNews(){

        $query = News::orderBy('title', 'asc')
            ->search($this->search);

        if($this->title){
            $query->where('title', $this->title);
        }
        if(($this->fromDate && $this->toDate) != null){
            $query->whereDate('datetime', '>=', $this->fromDate)
                ->whereDate('datetime', '<=', $this->toDate);
        }
        $news = $query->paginate(2);
        return compact('news');
    }
    public function render()
    {
        $news = News::latest()->get();
        return view('livewire.normal.news.index', $this->loadNews(), compact('news'));
    }
}
