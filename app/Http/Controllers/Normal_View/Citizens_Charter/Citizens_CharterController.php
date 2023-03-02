<?php

namespace App\Http\Controllers\Normal_View\Citizens_Charter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citizens_charter;
use DB;

class Citizens_CharterController extends Controller
{
    public function index(){

        $cit_charter = DB::table('citizens_charters')->orderBy('created_at', 'ASC')->get();
        return view('Normal_View.Citizens_charter.index', compact('cit_charter'));
    }
}
