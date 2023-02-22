<?php

namespace App\Http\Controllers\Normal_View\Provincial_Officials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincial_Official;
use DB;

class Provincial_OfficialsController extends Controller
{
    public function index(){

        $prov_officials = Provincial_Official::orderBy('created_at', 'ASC')->get();
        
        return view('Normal_View.Provincial_Officials.index', compact('prov_officials'));
    }
}
