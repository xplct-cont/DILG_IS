<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Image;
use File;
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






    public function delete_news(Request $request, $id)
    {


            // $img = DB::table('news')->find($id);
            // $destination = public_path('news/' .$img->images);
            //  if(File::exists($destination)){
            //      File::delete($destination);
             
            //  }
              
            //    else{
            //     dd('file not found');
            //  }
          


            // if(file_exists('public/news/' .$img->images)){
            //     delete('public/news/' .$img->images);
            //   }else{
            //     dd('File not found');
            //   }



            // $img = News::find($id);
            // \Storage::delete($post->image);


        return redirect()->back()->with('message', 'News Deleted Successfully!');
    }


}
