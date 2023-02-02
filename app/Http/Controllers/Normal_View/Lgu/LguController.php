<?php

namespace App\Http\Controllers\Normal_View\Lgu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lgu;
use DB;

class LguController extends Controller
{
    public function index(){

        
        $lgus = Lgu::with(['municipality'])->orderBy('municipality_id', 'asc')->get();
        return view('Normal_View.Lgu.lgu', compact('lgus'));
    }
}