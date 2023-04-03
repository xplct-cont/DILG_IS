<?php

namespace App\Http\Controllers\Normal_View\Provincial_Director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pd_Message;
use DB;

class DirectorController extends Controller
{
    public function index(){

        $pd = DB::table('orgs')->where('position', 'Provincial Director')->get();
        $pd_messages = DB::table('pd_messages')->get();

        return view('Normal_View.Provincial_Director.index', compact('pd', 'pd_messages'));
    }
    
}