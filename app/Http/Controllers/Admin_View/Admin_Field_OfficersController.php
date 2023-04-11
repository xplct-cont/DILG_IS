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

    public function index(Request $request){

        $municipalities = Municipality::all();

        $field_officers = Field_Officer::with(['municipality'])->where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($field_officers = $request->field_officers)){
                    $query->orWhere('fname', 'LIKE', '%'. $field_officers . '%')
                    ->orWhere('mid_initial', 'LIKE', '%'. $field_officers . '%')
                    ->orWhere('lname', 'LIKE', '%'. $field_officers . '%')
                    ->orWhere('position', 'LIKE', '%'. $field_officers . '%')
                    ->orWhere('cluster', 'LIKE', '%'. $field_officers . '%')->get();

                }
            }]
        ])

        ->orderBy("municipality_id","ASC")
        ->paginate(12);

        return view('Admin_View.field_officers.index', compact('field_officers', 'municipalities'))
        ->with('i',(request()->input('page',1)-1)*5);
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
            Image::make($file)->save('/home/dilgboho/public_html/field_off_images/'. $filename);
            $field_officers->profile_img = $filename;

          }

        $field_officers->save();

        return redirect()->back()->with('message', 'Added Successfully!');

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

            $destination = '/home/dilgboho/public_html/field_off_images/'.$field_officers->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('/home/dilgboho/public_html/field_off_images/', $filename);
            $field_officers->profile_img = $filename;

    }

    $field_officers->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_field_officer(Request $request, $id)
    {

            $field_officers = Field_Officer::find($id);
            $destination = '/home/dilgboho/public_html/field_off_images/'.$field_officers->profile_img;
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $field_officers->delete();

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

}

