<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincial_Official;
use Image;
use File;


class Admin_Provincial_OfficialsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $prov_officials = Provincial_Official::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($prov_officials = $request->prov_officials)){
                    $query->orWhere('name', 'LIKE', '%'. $prov_officials . '%')
                    ->orWhere('message', 'LIKE', '%'. $prov_officials . '%')
                    ->orWhere('position', 'LIKE', '%'. $prov_officials . '%')->get();
                 
                }
            }]
        ])
    
        ->orderBy("created_at","ASC")
        ->paginate(12);

        return view('Admin_View.provincial_officials.index', compact('prov_officials'))
        ->with('i',(request()->input('page',1)-1)*5);

    }


    public function store(Request $request){
        
        $prov_officials = new Provincial_Official;
       
        $prov_officials->name = $request->input('name');
        $prov_officials->position = $request->input('position');
        $prov_officials->message = $request->input('message');

        if($request->hasFile('profile_image')){

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save(public_path('/provincial_officials_images/' . $filename));
            $prov_officials->profile_image = $filename;
          
          }

        $prov_officials->save();

        return redirect()->back()->with('message', 'Added Successfully!');
     
    }

    public function update_provincial_officials(Request $request, $id){
        $prov_officials = Provincial_Official::find($id);

        $prov_officials->name = $request->input('name');
        $prov_officials->position = $request->input('position');
        $prov_officials->message = $request->input('message');

        if($request->hasFile('profile_image')){
      
            $destination = 'provincial_officials_images/'.$prov_officials->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('provincial_officials_images/', $filename);
            $prov_officials->profile_image = $filename;

    }

    $prov_officials->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_provincial_officials(Request $request, $id) 
    {


            $prov_officials = Provincial_Official::find($id);
            $destination = public_path('provincial_officials_images/'.$prov_officials->profile_image);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $prov_officials->delete();
           
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

}



