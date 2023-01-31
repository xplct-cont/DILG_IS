<?php

namespace App\Http\Controllers\Normal_View\Provincial_Director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DirectorController extends Controller
{
    public function index(){


        return view('Normal_View.Provincial_Director.index');
    }
    
}