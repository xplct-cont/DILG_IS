<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    use WithFileUploads;
    public $title, $caption, $image = [];
    public  $new_image = [], $old_image = [];
    public $news_id;

    public $search;
    public $fromDate = null;
    public $toDate = null;


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


    public function addNews(){
        $this->validate([
            'title' => 'string',
            'caption' => 'string',
            'image.*' => 'image', // 1MB Max
        ]);
        foreach ($this->image as $key => $img) {
            $this->image[$key] = $img->store('news', 'public');
        }

        $this->image = json_encode($this->image);

        News::create([
            'title' => $this->title,
            'caption' => $this->caption,
            'datetime' => $this->datetime = now(),
            'image' => $this->image]);

        session()->flash('success', 'Images has been successfully Uploaded.');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function editNews(int $news_id)
    {
        $news = News::find($news_id);
        if($news){
            $this->news_id = $news->id;
            $this->title = $news->title;
            $this->caption = $news->caption;

        }else{
            return redirect()->to('/admin/news');
        }

    }
    public function updateNews(){
        $this->validate([
            'title' => 'string',
            'caption' => 'string',
            'image.*' => 'image', // 1MB Max

        ]);

        foreach ($this->image as $key => $img) {
            $this->image[$key] = $img->store('news');
        }

        $news = News::find($this->news_id);
        $images = json_decode($news->image,true);
        if (is_array($images) && !empty($images)){
            foreach ($images as $image){
                if(File::exists($image)){
                    File::delete($image);
            }

        }
        News::where('id',$this->news_id)->update([
            'title' => $this->title,
            'caption' => $this->caption,
            'datetime' => $this->datetime = now(),
            'image' => $this->image,
        ]);
    }

        session()->flash('message','news Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteNews(int $news_id)
    {
        $this->news_id = $news_id;
    }

    public function destroyNews()
    {
        $news = News::find($this->news_id);
        //$destination= public_path('images/'.$news->image);
        $images = json_decode($news->image,true);
        if (is_array($images) && !empty($images)){
            foreach ($images as $image){
                if(File::exists($image)){
                    File::delete($image);
            }
        }
        $news->delete();
        }

        session()->flash('message','News deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInput()
    {
        $this->title = '';
        $this->caption = '';
        $this->image = '';
    }

    public function closeModal()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        //$news = News::get();
        return view('livewire.admin.news.index', $this->loadNews(), ['news'=> News::all()]);
    }
}
