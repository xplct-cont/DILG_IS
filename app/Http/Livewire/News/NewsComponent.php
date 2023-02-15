<?php

namespace App\Http\Livewire\News;

use Livewire\Component;

class NewsComponent extends Component
{
    public function render()
    {
        return view('livewire.news.news-component')->layout('Admin_View.layouts.app');
    }
}
