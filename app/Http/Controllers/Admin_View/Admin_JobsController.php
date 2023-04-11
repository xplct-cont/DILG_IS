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

    public function index(Request $request){

        $admin_jobs = Job::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($admin_jobs = $request->admin_jobs)){
                    $query->orWhere('position', 'LIKE', '%'. $admin_jobs . '%')
                    ->orWhere('details', 'LIKE', '%'. $admin_jobs . '%')->get();


                }
            }]
        ])

        ->orderBy("created_at","DESC")
        ->paginate(8);


        return view('Admin_View.jobs.index', compact('admin_jobs'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function store(Request $request){

        $admin_jobs = new Job;

        $admin_jobs->position = $request->input('position');
        $admin_jobs->link = $request->input('link');
        $admin_jobs->details = $request->input('details');
        $admin_jobs->user_id = auth()->user()->id;


        if($request->hasFile('hiring_img')){

            $file = $request->file('hiring_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save('/home/dilgboho/public_html/hiring_images/'. $filename);
            $admin_jobs->hiring_img = $filename;

          }

        $admin_jobs->save();

        return redirect()->back()->with('message', 'Added Successfully!');

    }

    public function update_jobs(Request $request, $id){
        $admin_jobs = Job::find($id);

        $admin_jobs->position = $request->input('position');
        $admin_jobs->link = $request->input('link');
        $admin_jobs->details = $request->input('details');
        $admin_jobs->user_id = auth()->user()->id;

        if($request->hasFile('hiring_img')){

            $destination = '/home/dilgboho/public_html/hiring_images/'.$admin_jobs->hiring_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('hiring_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('/home/dilgboho/public_html/hiring_images/', $filename);
            $admin_jobs->hiring_img = $filename;

    }

    $admin_jobs->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_jobs(Request $request, $id)
    {
            $admin_jobs = Job::find($id);
            $destination = '/home/dilgboho/public_html/hiring_images/'.$admin_jobs->hiring_img;
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $admin_jobs->delete();

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

    public function available($id)
    {
        $admin_jobs = Job::find($id);
        $admin_jobs->remarks = 'Available';
        $admin_jobs->save();

        return redirect()->back()->with('message', 'Changed to Available!');
    }

    public function filled_up($id)
    {
        $admin_jobs = Job::find($id);
        $admin_jobs->remarks = 'Filled Up';
        $admin_jobs->save();

        return redirect()->back()->with('message', 'Changed to Filled Up!');
    }

}
