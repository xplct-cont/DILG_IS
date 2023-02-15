<?php

namespace App\Http\Livewire\News;

use Livewire\Component;

class AddNewsComponent extends Component
{
    public function render()
    {
        return view('livewire.news.add-news-component')->layout('layouts.app');
    }
}
