<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Field_Officer;
use App\Models\Municipality;
use Image;
use File;

class Admin_Field_OfficersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $municipalities = Municipality::all();
        $field_officers = Field_Officer::with(['municipality'])->get();
        return view('Admin_View.field_officers.index', compact('field_officers', 'municipalities'));
    }

    public function store(Request $request){
        
        $field_officers = new Field_Officer;
       
        $field_officers->fname = $request->input('fname');
        $field_officers->mid_initial = $request->input('mid_initial');
        $field_officers->lname = $request->input('lname');
        $field_officers->position = $request->input('position');
        $field_officers->municipality_id = $request->input('municipality_id');
        $field_officers->cluster = $request->input('cluster');

        if($request->hasFile('profile_img')){

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save(public_path('/field_off_images/' . $filename));
            $field_officers->profile_img = $filename;
          
          }

        $field_officers->save();

        return redirect()->back()->with('message', 'Added to Field Officers Successfully!');
     
    }

    public function update_field_officer(Request $request, $id){
        $field_officers = Field_Officer::find($id);

        $field_officers->fname = $request->input('fname');
        $field_officers->mid_initial = $request->input('mid_initial');
        $field_officers->lname = $request->input('lname');
        $field_officers->position = $request->input('position');
        $field_officers->municipality_id = $request->input('municipality_id');
        $field_officers->cluster = $request->input('cluster');

        if($request->hasFile('profile_img')){
      
            $destination = 'field_off_images/'.$field_officers->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('field_off_images/', $filename);
            $field_officers->profile_img = $filename;

    }

    $field_officers->update();
    return redirect()->back()->with('message', 'Field Officer Updated Successfully!');

    }

    public function delete_field_officer(Request $request, $id) 
    {

        // $ids = $request->ids;
        // Org::whereIn('id', $ids)->delete();

            $field_officers = Field_Officer::find($id);
            $destination = public_path('field_off_images/'.$field_officers->profile_img);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $field_officers->delete();
           
        return redirect()->back()->with('message', 'Field Officer Deleted Successfully!');
    }

}

