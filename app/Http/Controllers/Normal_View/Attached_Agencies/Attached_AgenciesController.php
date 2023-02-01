<?php

namespace App\Http\Controllers\Normal_View\Attached_Agencies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Attached_AgenciesController extends Controller
{
    public function index(){

        return view('Normal_View.Attached_Agencies.index');
    }
    
}