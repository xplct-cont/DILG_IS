<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Home_Image;
use Image;
use File;
class Admin_HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $home_images = Home_Image::all();

        $updates = DB::table('updates')->count();
        $projects = DB::table('projects')->count();
        $jobs = DB::table('jobs')->count();
        $orgs = DB::table('orgs')->count();
        $pdmus = DB::table('pdmus')->count();
        $lgus = DB::table('lgus')->count();
        $field_officers = DB::table('field_officers')->count();
        $faqs = DB::table('faqs')->count();
        $b_issuances = DB::table('bohol_issuances')->count();
        return view('Admin_View.layouts.home',compact('home_images', 'updates', 'projects','jobs','orgs', 'pdmus', 'lgus', 'field_officers', 'faqs', 'b_issuances'));
    }


    public function store(Request $request, $id){

        $img = Home_Image::find($id);

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $images = json_decode($img->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists(public_path('home_images/'.$deleteimage))) {
                    File::delete(public_path('home_images/'.$deleteimage));
                }
            }

        }

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move(public_path('/home_images/'), $name);
                $data[] = $name;
        }
    }

        // $img = Home_Image::find($id);
        $img->images = json_encode($data);
        $img->save();
        return redirect()->back()->with('message', 'Added Images Successfully!');

    }
}


