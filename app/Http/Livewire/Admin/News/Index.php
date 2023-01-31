<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $title, $caption, $image = [];

    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function addNews(){
        $this->validate([
            'title' => 'string',
            'caption' => 'string',
            'image.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->image as $key => $img) {
            $this->image[$key] = $img->store('services', 'public');
        }

        $this->image = json_encode($this->image);

        News::create([
            'title' => $this->title,
            'caption' => $this->caption,
            'datetime' => $this->datetime = now(),
            'image' => $this->image]);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('success', 'Images has been successfully Uploaded.');
    }

    public function resetInput()
    {
        $this->title = '';
        $this->caption = '';
        $this->datetime = '';
        $this->image = '';
    }
    public function render()
    {
        $news = News::get();
        return view('livewire.admin.news.index', compact('news'));
    }
}
