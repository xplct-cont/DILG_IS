<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Http\Request;
use App\Models\Update;


class Admin_UpdateController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){

        $news_images = Update::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($news_images = $request->news_images)){
                    $query->orWhere('title', 'LIKE', '%'. $news_images . '%')
                    ->orWhere('caption', 'LIKE', '%'. $news_images . '%')->get();
    
                }
            }]
        ])
    
        ->orderBy("created_at","DESC")
        ->paginate(20);

        return view('Admin_View.updates.index', compact('news_images'))
        ->with('i',(request()->input('page',1)-1)*5);

    }


    public function store(Request $request){

        $img = new Update;

        $img->title = $request->input('title');
        $img->caption = $request->input('caption');

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path('/news_updates/'), $name);
                $data[] = $name;
        }
    }

        // $img = Home_Image::find($id);
        $img->images = json_encode($data);
        $img->save();
        return redirect()->back()->with('message', 'Added Successfully!');

    }

    public function edit_updates(Request $request, $id){
        $img = Update::find($id);

        // $img = new Update;

        $img->title = $request->input('title');
        $img->caption = $request->input('caption');

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = json_decode($img->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists(public_path('news_updates/'.$deleteimage))) {
                    File::delete(public_path('news_updates/'.$deleteimage));
                }
            }

        }
        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path('/news_updates/'), $name);
                $data[] = $name;
        }
        $img->images = json_encode($data);
        $img->update();

        return redirect()->back()->with('message', 'Updated Successfully!');

    }
}
    public function delete_updates(Request $request, $id)
    {
        $img = Update::find($id);
        $images = json_decode($img->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists(public_path('news_updates/'.$deleteimage))) {
                    File::delete(public_path('news_updates/'.$deleteimage));
                }
            }
            $img->delete();
        }

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }


}
