<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\Newstable;
use App\Models\Newsimages;
use Livewire\WithFileUploads;

class AddNewsComponent extends Component
{

    use WithFileUploads;

    public $title, $images = [];

    public function updated($fields){
        $this->validateOnly($fields, [
            'title' => 'required',
            'images' => 'required',

        ]);
    }

    public function addNews(){
        $this->validate([
            'title' => 'required',
            'images' => 'required',

        ]);

        $unique_id = time();

        $news['title'] = $this->title;
        $news['unique_id'] = $unique_id;

        foreach ($this->images as $key => $image){
            $nImage['news_unique_id'] = $unique_id;
            $imageName = time().'.'.$this->images[$key]->extension();
            $this->images[$key]->storeAs('all', $imageName);

            $nImage['image'] = $imageName;

            Newsimages::create($nImage);
        }

        Newstable::create($news);
    }
    public function render()
    {
        return view('livewire.news.add-news-component')->layout('Admin_View.layouts.app');
    }
}
