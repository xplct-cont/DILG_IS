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
    public function index(){


        $news_images = Update::orderBy('created_at', 'DESC')->get();
        return view('Admin_View.updates.index', compact('news_images'));
        
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
        return redirect()->back()->with('message', 'Added Images Successfully!');
     
    }

    public function edit_updates(Request $request, $id){


        return redirect()->back()->with('message', 'News/Updates Updated Successfully!');

    }




    public function delete_updates(Request $request, $id)
    {

            // $img = Update::find($id);
            // $imagePaths = [public_path('news_updates/' .$img->images),
            // ];
            // foreach ($imagePaths as $imagePath) {
            //     if (File::exists($imagePath)) {
            //         File::delete($imagePath);
            //     }
            // }
    
        return redirect()->back()->with('message', 'News/Updates Deleted Successfully!');
    }


}
