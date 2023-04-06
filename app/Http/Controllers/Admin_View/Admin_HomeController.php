<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Home_Image;
use App\Models\Log;
use App\Models\Audio;
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
        $audio = Audio::all();


        $updates = DB::table('updates')->count();
        $jobs = DB::table('jobs')->count();
        $orgs = DB::table('orgs')->count();
        $pdmus = DB::table('pdmus')->count();
        $lgus = DB::table('lgus')->count();
        $field_officers = DB::table('field_officers')->count();
        $faqs = DB::table('faqs')->count();
        $b_issuances = DB::table('bohol_issuances')->count();
        $downloadables = DB::table('downloadables')->count();
        $knowledge_materials = DB::table('knowledge_materials')->count();
        $prov_officials = DB::table('provincial_officials')->count();
        $cit_charter = DB::table('citizens_charters')->count();
        $logs = DB::table('activity_log')->where('causer_id', '!=', 1)->count();
        $users = DB::table('users')->where('id','!=', 1)->count();

        return view('Admin_View.layouts.home',compact('audio' ,'home_images', 'updates','jobs','orgs', 'pdmus', 'lgus', 'field_officers', 'faqs', 'b_issuances', 'downloadables', 'knowledge_materials', 'prov_officials', 'cit_charter' ,'logs' , 'users'));
    }


    public function store(Request $request, $id){

        $img = Home_Image::find($id);

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $images = json_decode($img->images,true);
        if (is_array($images) && !empty($images)){
        foreach ($images as $deleteimage) {
                if (File::exists('/home/dilgboho/public_html/home_images/' .$deleteimage)) {
                    File::delete('/home/dilgboho/public_html/home_images/' .$deleteimage);
                }
            }

        }

        if ($request->hasFile('images')){

            foreach($request->file('images') as $image){

                $name = $image->getClientOriginalName();
                $image->move('/home/dilgboho/public_html/home_images/', $name);
                $data[] = $name;
        }
    }

        // $img = Home_Image::find($id);
        $img->images = json_encode($data);
        $img->save();
        return redirect()->back()->with('message', 'Added Images Successfully!');

    }


    public function change_audio(Request $request, $id){

        $request->validate([
            'file' => 'required|mimes:mp3,wav'
            ]);
           
            $aud = Audio::find($id);

        if($request->hasFile('file')){

            $destination = 'audio/'.$aud->file;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('audio/', $filename);
            $aud->file = $filename;


          }

        $aud->update();

    return redirect()->back()->with('message', 'Audio Changed Successfully!');

    }
}


