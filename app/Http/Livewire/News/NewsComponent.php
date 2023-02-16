<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\Newstable;

class NewsComponent extends Component
{
    public function render()
    {

        $news = Newstable::all();
        return view('livewire.news.news-component', compact('news'));
    }
}
