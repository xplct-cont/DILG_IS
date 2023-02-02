<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Lgu;
use App\Models\Municipality;
use Image;
use File;

class Admin_LguController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $lgus = Lgu::with(['municipality'])->orderBy('municipality_id', 'asc')->get();

        $municipalities = Municipality::all();
        return view('Admin_View.lgu.index', compact('lgus', 'municipalities'));
    }

    public function store(Request $request){
        
        $lgus = new Lgu;
       
        $lgus->municipality_id = $request->input('municipality_id');
        $lgus->mayor = $request->input('mayor');
        $lgus->vice_mayor = $request->input('vice_mayor');
        $lgus->sb_member1 = $request->input('sb_member1');
        $lgus->sb_member2 = $request->input('sb_member2');
        $lgus->sb_member3 = $request->input('sb_member3');
        $lgus->sb_member4 = $request->input('sb_member4');
        $lgus->sb_member5 = $request->input('sb_member5');
        $lgus->sb_member6 = $request->input('sb_member6');
        $lgus->sb_member7 = $request->input('sb_member7');
        $lgus->sb_member8 = $request->input('sb_member8');

        $lgus->save();

        return redirect()->back()->with('message', 'Added Details Successfully!');
     
    }

    public function update_lgu(Request $request, $id){
        $lgus = Lgu::find($id);

        $lgus->mayor = $request->input('mayor');
        $lgus->vice_mayor = $request->input('vice_mayor');
        $lgus->sb_member1 = $request->input('sb_member1');
        $lgus->sb_member2 = $request->input('sb_member2');
        $lgus->sb_member3 = $request->input('sb_member3');
        $lgus->sb_member4 = $request->input('sb_member4');
        $lgus->sb_member5 = $request->input('sb_member5');
        $lgus->sb_member6 = $request->input('sb_member6');
        $lgus->sb_member7 = $request->input('sb_member7');
        $lgus->sb_member8 = $request->input('sb_member8');
       
    $lgus->update();

    return redirect()->back()->with('message', 'Details Updated Successfully!');

    }

    public function delete_lgu($id){
        $remove = Lgu::findOrFail($id);
        $remove -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');   
      }    


}