<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Bohol_Issuance;
use Image;
use File;

class Admin_Bohol_IssuancesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $b_issuances = DB::table('bohol_issuances')->get();
        return view('Admin_View.bohol_issuances.index', compact('b_issuances'));
    }

}