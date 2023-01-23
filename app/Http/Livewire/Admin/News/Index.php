<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $title, $caption, $image = [];
    public $news = [];

    // public function addNews(){
    //     $news = new News();
    //     $this->validate([
    //         'title' => 'string',
    //         'caption' => 'string',
    //         'image' => 'required', // 1MB Max
    //     ]);

    //     $filename = "";
    //     if ($this->image) {
    //         $filename = $this->image->store('news', 'public');
    //     } else {
    //         $filename = Null;
    //     }
    //     $news->title = $this->title;
    //     $news->caption = $this->caption;
    //     $news->image = $filename;
    //     $result = $news->save();

    //     if ($result) {
    //         session()->flash('success', 'image has been successfully Uploaded.');
    //         $this->resetInput();
    //         $this->dispatchBrowserEvent('close-modal');
    //     }else {
    //         session()->flash('error', 'Create Unsuccessfully');
    //     }
    // }


    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function resetInput()
    {
        $this->title = '';
        $this->caption = '';
        $this->image = '';
    }

    public function addNews(){
        $this->validate([
            'title' => 'string',
            'caption' => 'string',
            'image.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->image as $key => $img) {
            $this->image[$key] = $img->store('images');
        }

        $this->image = json_encode($this->image);

        News::create([
            'title' => $this->title,
            'caption' => $this->caption,
            'image' => $this->image]);

        session()->flash('success', 'Images has been successfully Uploaded.');

        return redirect()->back();
    }
    // public function addNews(){
    //     $this->validate([
    //         'title' => 'string',
    //         'caption' => 'string',
    //         'image.*' => 'image',

    //     ]);

    //     foreach ($this->image as $img) {
    //         $img->store('images');
    //     }

    //     News::create([
    //         'title' => $this->title,
    //         'caption' => $this->caption,
    //         'image' => $this->image,
    //     ]);
    // }
    public function render()
    {
        $news = News::get();
        return view('livewire.admin.news.index', compact('news'));
    }
}
