<?php

namespace App\Http\Livewire\Admin\News;

use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $title, $caption, $images = [];

    public function addNews(){
        $this->validate([
            'image.*' => 'image', // 1MB Max
        ]);

        foreach ($this->image as $img) {
            $img->store('image');
        }
    }
    public function render()
    {
        return view('livewire.admin.news.index');
    }
}
