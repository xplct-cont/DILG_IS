<?php

namespace App\Http\Controllers\Normal_View\Bohol_Issuances;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bohol_Issuance;
use Illuminate\Support\Facades\Storage;
use DB;

class Bohol_IssuancesController extends Controller
{
    public function index(){
        
        $issuances = Bohol_Issuance::orderBy('date', 'ASC')->limit(6)->get();
        return view('Normal_View.Bohol_Issuances.bohol_issuances', compact('issuances'));
    }


    public function show( $id){

        $b_issuance = Bohol_Issuance::find($id);
        $issuances = Bohol_Issuance::orderBy('date', 'ASC')->limit(3)->get();;

    
        return view('Normal_View.Bohol_Issuances.show', compact('b_issuance', 'issuances'));
    }

    public function download( Request $request, $file){

        return response()->download( public_path('issuance_files/'.$file));
       
    }
}