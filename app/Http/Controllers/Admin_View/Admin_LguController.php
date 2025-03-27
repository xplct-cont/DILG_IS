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

    public function index(Request $request){

        $lgus = Lgu::with(['municipality'])->where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($lgus = $request->lgus)){
                    $query->orWhere('mayor', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('vice_mayor', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member1', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member2', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member3', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member4', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member5', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member6', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member7', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('sb_member8', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('lb_pres', 'LIKE', '%'. $lgus . '%')
                    ->orWhere('psk_pres', 'LIKE', '%'. $lgus . '%')->get();

                }
            }]
        ])

        ->orderBy("municipality_id","ASC")
        ->paginate(12);


        $municipalities = Municipality::all();
        return view('Admin_View.lgu.index', compact('lgus', 'municipalities'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'municipality_id' => 'required|exists:municipalities,id',
        ]);
    
        if (!Municipality::where('id', $request->municipality_id)->exists()) {
            return redirect()->back()->withErrors(['municipality_id' => 'The selected municipality does not exist.'])->withInput();
        }
    
        $lgus = new Lgu;
        $lgus->fill($request->all());
        $lgus->save();
    
        return redirect()->back()->with('message', 'Added Successfully!');
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
        $lgus->sb_member9 = $request->input('sb_member9');
        $lgus->sb_member10 = $request->input('sb_member10');
        $lgus->lb_pres = $request->input('lb_pres');
        $lgus->psk_pres = $request->input('psk_pres');

    $lgus->update();

    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_lgu($id){
        $remove = Lgu::findOrFail($id);
        $remove -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
      }


}
