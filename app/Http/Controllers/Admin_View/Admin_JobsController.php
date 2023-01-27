<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Job;
use Image;
use File;

class Admin_JobsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $admin_jobs = DB::table('jobs')->orderBy('created_at','desc')->get();
        return view('Admin_View.jobs.index', compact('admin_jobs'));
    }

    public function store(Request $request){
        
        $admin_jobs = new Job;
       
        $admin_jobs->position = $request->input('position');
        $admin_jobs->link = $request->input('link');
        $admin_jobs->details = $request->input('details');

        if($request->hasFile('hiring_img')){

            $file = $request->file('hiring_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save(public_path('/hiring_images/' . $filename));
            $admin_jobs->hiring_img = $filename;
          
          }

        $admin_jobs->save();

        return redirect()->back()->with('message', 'Added Vacant Position Successfully!');
     
    }

    public function update_jobs(Request $request, $id){
        $admin_jobs = Job::find($id);

        $admin_jobs->position = $request->input('position');
        $admin_jobs->link = $request->input('link');
        $admin_jobs->details = $request->input('details');

        if($request->hasFile('hiring_img')){
      
            $destination = 'hiring_images/'.$admin_jobs->hiring_images;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('hiring_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('hiring_images/', $filename);
            $admin_jobs->hiring_img = $filename;

    }

    $admin_jobs->update();
    return redirect()->back()->with('message', 'Vacant Position Updated Successfully!');

    }

    public function delete_jobs(Request $request, $id) 
    {

        // $ids = $request->ids;
        // Job::whereIn('id', $ids)->delete();

            $admin_jobs = Job::find($id);
            $destination = public_path('hiring_images/'.$admin_jobs->hiring_img);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $admin_jobs->delete();
           
        return redirect()->back()->with('message', 'Vacant Position Deleted Successfully!');
    }

}
