<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Downloadable;


class Admin_DownloadablesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $downloadables = Downloadable::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($downloadables = $request->downloadables)){
                    $query->orWhere('title', 'LIKE', '%'. $downloadables . '%')->get();
                    
                }
            }]
        ])
    
        ->orderBy("created_at","DESC")
        ->paginate(12);

        return view('Admin_View.downloadables.downloadables', compact('downloadables'))
        ->with('i',(request()->input('page',1)-1)*5);

    }

    public function store(Request $request){
        
        $downloadables = new Downloadable;
       
        $downloadables->title = $request->input('title');
        $downloadables->link = $request->input('link');
        
        $downloadables->save();

        return redirect()->back()->with('message', 'Added Successfully!');
     
    }

    public function update_downloadables(Request $request, $id){
       
        $downloadables = Downloadable::find($id);

        $downloadables->title = $request->input('title');
        $downloadables->link = $request->input('link');
       
    $downloadables->update();

    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_downloadables($id){
        $remove = Downloadable::findOrFail($id);
        $remove -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');   
      }    


}
