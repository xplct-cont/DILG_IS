<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Citizens_Charter;
use Image;
use File;


class Admin_Citizens_CharterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $citizens_charter = Citizens_Charter::orderBy('page_num', 'ASC')->get();

        return view('Admin_View.citizens_charter.index', compact('citizens_charter'));

    }

    
    public function store(Request $request){
        
        $citizens_charter = new Citizens_Charter;
       
        $citizens_charter->page_num = $request->input('page_num');

        if($request->hasFile('images')){

            $file = $request->file('images');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save(public_path('/citizens_charter_images/' . $filename));
            $citizens_charter->images = $filename;
          
          }

        $citizens_charter->save();

        return redirect()->back()->with('message', 'Added Successfully!');
     
    }

    public function update_citizens_charter(Request $request, $id){
      
        $citizens_charter = Citizens_Charter::find($id);

        $citizens_charter->page_num = $request->input('page_num');

        if($request->hasFile('images')){
      
            $destination = 'citizens_charter_images/'.$citizens_charter->images;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('images');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('citizens_charter_images/', $filename);
            $citizens_charter->images = $filename;

    }

    $citizens_charter->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_citizens_charter(Request $request, $id) 
    {

            $citizens_charter = Citizens_Charter::find($id);
            $destination = public_path('citizens_charter_images/'.$citizens_charter->images);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $citizens_charter->delete();
           
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

}


