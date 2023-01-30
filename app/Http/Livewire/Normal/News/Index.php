<?php

namespace App\Http\Livewire\Normal\News;

use App\Models\News;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $news = News::latest()->get();
        return view('livewire.normal.news.index', compact('news'));
    }
}
