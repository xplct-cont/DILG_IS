<?php

namespace App\Http\Livewire\Admin\News;

use Livewire\Component;

class Index extends Component
{
    public $title, $caption, $image;


    public function render()
    {
        return view('livewire.admin.news.index');
    }
}
