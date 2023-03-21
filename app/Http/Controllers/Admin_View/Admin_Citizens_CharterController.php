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

        $citizens_charter = Citizens_Charter::orderBy('created_at', 'ASC')->get();

        return view('Admin_View.citizens_charter.index', compact('citizens_charter'));

    }

    public function store(Request $request){
        
        $request->validate([
            'file' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
          
        ]);
            $citizens_charter = new Citizens_Charter;
            $citizens_charter->title = $request->input('title');
           

        if($request->hasFile('file')){

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('/home/dilgboho/public_html/citizens_charter_videos/', $filename);
            $citizens_charter->file = $filename;

          }

        $citizens_charter->save();
        return redirect()->back()->with('message', 'Added Successfully!');
     
    }

    public function update_citizens_charter(Request $request, $id){
      
        $request->validate([
            'file' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
          
        ]);
        $citizens_charter = Citizens_Charter::find($id);

        $citizens_charter->title = $request->input('title');
           
        if($request->hasFile('file')){

            $destination = '/home/dilgboho/public_html/citizens_charter_videos/'.$citizens_charter->file;
                if(File::exists($destination)){
                    File::delete($destination);
                }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('/home/dilgboho/public_html/citizens_charter_videos/', $filename);
            $citizens_charter->file = $filename;

          }

    $citizens_charter->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_citizens_charter(Request $request, $id) 
    {

            $citizens_charter = Citizens_Charter::find($id);
            $destination = '/home/dilgboho/public_html/citizens_charter_videos/' .$citizens_charter->file;
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $citizens_charter->delete();
           
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

}


