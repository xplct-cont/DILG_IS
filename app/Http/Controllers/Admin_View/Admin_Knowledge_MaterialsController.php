<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Knowledge_Material;


class Admin_Knowledge_MaterialsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $knowledge_materials = Knowledge_Material::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($knowledge_materials = $request->knowledge_materials)){
                    $query->orWhere('title', 'LIKE', '%'. $knowledge_materials . '%')->get();
                    
                }
            }]
        ])
    
        ->orderBy("date","ASC")
        ->paginate(12);

        return view('Admin_View.knowledge_materials.index', compact('knowledge_materials'))
        ->with('i',(request()->input('page',1)-1)*5);

    }

    public function store(Request $request){
        
        $knowledge_materials = new Knowledge_Material;
       
        $knowledge_materials->title = $request->input('title');
        $knowledge_materials->link = $request->input('link');
        $knowledge_materials->date = $request->input('date');


        
        $knowledge_materials->save();

        return redirect()->back()->with('message', 'Added Successfully!');
     
    }

    public function update_knowledge_materials(Request $request, $id){
       
        $knowledge_materials = Knowledge_Material::find($id);

        $knowledge_materials->title = $request->input('title');
        $knowledge_materials->link = $request->input('link');
        $knowledge_materials->date = $request->input('date');

       
    $knowledge_materials->update();

    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_knowledge_materials($id){
        $remove = Knowledge_Material::findOrFail($id);
        $remove -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');   
      }    


}
