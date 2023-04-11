<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Http\Request;
use App\Models\Update;
use App\Models\Updates_Image;


class Admin_UpdateController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $updates_images = Updates_Image::all();
        $news_images = Update::when($request->status != null, function($q) use ($request){
            return $q->where('status', $request->status);
        })
        ->when($request->search != null, function($q) use ($request){
            return $q->where('title', 'LIKE', '%'. $request->search . '%')
                    ->orWhere('caption', 'LIKE', '%'. $request->search . '%');
        })
        ->orderBy("created_at","DESC")
        ->paginate(20);

        return view('Admin_View.updates.index', compact('news_images', 'updates_images'))
        ->with('i',(request()->input('page',1)-1)*5);

    }


    public function store(Request $request){

        $img = new Update;

        $img->title = $request->input('title');
        $img->caption = $request->input('caption');
        $img->user_id = auth()->user()->id;

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move('/home/dilgboho/public_html/news_updates/', $name);
                $data[] = $name;
        }
    }

        $img->images = json_encode($data);
        $img->save();
        return redirect()->back()->with('message', 'Added Successfully : Waiting for Approval!');

    }

    public function edit_updates(Request $request, $id){
        $img = Update::find($id);


        $img->title = $request->input('title');
        $img->caption = $request->input('caption');
        $img->user_id = auth()->user()->id;

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move('/home/dilgboho/public_html/news_updates/', $name);
                $data[] = $name;
            }

            $images = json_decode($img->images,true);
            if (is_array($images) && !empty($images)){
            foreach ($images as $deleteimage) {
                    if (File::exists('/home/dilgboho/public_html/news_updates/'.$deleteimage)) {
                        File::delete('/home/dilgboho/public_html/news_updates/'.$deleteimage);
                    }
                }

            }

        $img->images = json_encode($data);
        }


        $img->update();

        return redirect()->back()->with('message', 'Updated Successfully!');


}
    public function delete_updates(Request $request, $id)
    {
        $img = Update::find($id);
        $images = json_decode($img->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists('/home/dilgboho/public_html/news_updates/'.$deleteimage)) {
                    File::delete('/home/dilgboho/public_html/news_updates/'.$deleteimage);
                }
            }
            $img->delete();
        }

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }


    public function storeImage(Request $request, $id){

        $img = Updates_Image::find($id);

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $images = json_decode($img->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists('/home/dilgboho/public_html/updates_images/'.$deleteimage)) {
                    File::delete('/home/dilgboho/public_html/updates_images/'.$deleteimage);
                }
            }

        }

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move('/home/dilgboho/public_html/updates_images/', $name);
                $data[] = $name;
        }
    }

        // $img = Home_Image::find($id);
        $img->images = json_encode($data);
        $img->save();
        return redirect()->back()->with('message', 'Added Images Successfully!');

    }

    public function approve($id)
    {
        $news_updates = Update::find($id);
        $news_updates->status = true;
        $news_updates->save();

        return redirect()->back()->with('message', 'Approved Successfully!');
    }

    public function disapprove($id)
    {
        $news_updates = Update::find($id);
        $news_updates->status = false;
        $news_updates->save();

        return redirect()->back()->with('message', 'Disapproved Successfully!');
    }

}
