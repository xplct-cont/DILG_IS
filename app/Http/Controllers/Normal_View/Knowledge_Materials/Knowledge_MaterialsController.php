<?php

namespace App\Http\Controllers\Normal_View\Knowledge_Materials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Knowledge_Material;
use DB;

class Knowledge_MaterialsController extends Controller
{
    public function index(){

        
        $knowledge_materials = Knowledge_Material::orderBy("date","ASC")->get();
        
        return view('Normal_View.Knowledge_Materials.knowledge_materials', compact('knowledge_materials'));
    }
}