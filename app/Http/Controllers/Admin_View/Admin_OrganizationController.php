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

    public function index(Request $request){

        $orgs = Org::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($orgs = $request->orgs)){
                    $query->orWhere('fname', 'LIKE', '%'. $orgs . '%')
                    ->orWhere('mid_initial', 'LIKE', '%'. $orgs . '%')
                    ->orWhere('lname', 'LIKE', '%'. $orgs . '%')
                    ->orWhere('position', 'LIKE', '%'. $orgs . '%')->get();
                }
            }]
        ])

        ->orderBy("created_at","ASC")
        ->paginate(10);

        return view('Admin_View.organization.index', compact('orgs'))
        ->with('i',(request()->input('page',1)-1)*5);
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
            Image::make($file)->save('/home/dilgboho/public_html/org_profile_images/'. $filename);
            $orgs->profile_img = $filename;

          }

        $orgs->save();

        return redirect()->back()->with('message', 'Added Successfully!');

    }

    public function update_org(Request $request, $id){
        $orgs = Org::find($id);

        $orgs->fname = $request->input('fname');
        $orgs->mid_initial = $request->input('mid_initial');
        $orgs->lname = $request->input('lname');
        $orgs->position = $request->input('position');

        if($request->hasFile('profile_img')){

            $destination = '/home/dilgboho/public_html/org_profile_images/'.$orgs->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('/home/dilgboho/public_html/org_profile_images/', $filename);
            $orgs->profile_img = $filename;

    }

    $orgs->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_org(Request $request, $id)
    {

            $orgs = Org::find($id);
            $destination = '/home/dilgboho/public_html/org_profile_images/'.$orgs->profile_img;
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $orgs->delete();

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

}
