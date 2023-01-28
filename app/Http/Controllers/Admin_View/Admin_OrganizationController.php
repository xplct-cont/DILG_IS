<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Org;
use Image;
use File;

class Admin_OrganizationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $orgs = DB::table('orgs')->get();
        return view('Admin_View.organization.index', compact('orgs'));
    }

    public function store(Request $request){
        
        $orgs = new Org;
       
        $orgs->fname = $request->input('fname');
        $orgs->mid_initial = $request->input('mid_initial');
        $orgs->lname = $request->input('lname');
        $orgs->position = $request->input('position');

        if($request->hasFile('profile_img')){

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save(public_path('/org_profile_images/' . $filename));
            $orgs->profile_img = $filename;
          
          }

        $orgs->save();

        return redirect()->back()->with('message', 'Added to Organizational Structure Successfully!');
     
    }

    public function update_org(Request $request, $id){
        $orgs = Org::find($id);

        $orgs->fname = $request->input('fname');
        $orgs->mid_initial = $request->input('mid_initial');
        $orgs->lname = $request->input('lname');
        $orgs->position = $request->input('position');

        if($request->hasFile('profile_img')){
      
            $destination = 'org_profile_images/'.$orgs->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('org_profile_images/', $filename);
            $orgs->profile_img = $filename;

    }

    $orgs->update();
    return redirect()->back()->with('message', 'Profile Updated Successfully!');

    }

    public function delete_org(Request $request, $id) 
    {

        // $ids = $request->ids;
        // Org::whereIn('id', $ids)->delete();

            $orgs = Org::find($id);
            $destination = public_path('org_profile_images/'.$orgs->profile_img);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $orgs->delete();
           
        return redirect()->back()->with('message', 'Profile Deleted Successfully!');
    }

}