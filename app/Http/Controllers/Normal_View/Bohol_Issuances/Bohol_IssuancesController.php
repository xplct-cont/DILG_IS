<?php

namespace App\Http\Controllers\Normal_View\Bohol_Issuances;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bohol_Issuance;
use DB;

class Bohol_IssuancesController extends Controller
{
    public function index(){

        $issuances = Bohol_Issuance::orderBy('date', 'DESC')->get();
        return view('Normal_View.Bohol_Issuances.bohol_issuances', compact('issuances'));
    }
}