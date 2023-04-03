<?php

namespace App\Http\Controllers\Normal_View\Provincial_Officials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincial_Official;
use DB;

class Provincial_OfficialsController extends Controller
{
    public function index(){

        $governor = Provincial_Official::where('position', 'Governor')->get();
        $vice_governor = Provincial_Official::where('position', 'Vice Governor')->get();

        $first_district = Provincial_Official::where('position', 'like','%1st%')->get();
        $second_district = Provincial_Official::where('position', 'like','%2nd%')->get();
        $third_district = Provincial_Official::where('position', 'like','%3rd%')->get();

        $ex_officio_1 = Provincial_Official::where('position', 'like','%Bohol Federation%')->get();
        $ex_officio_2 = Provincial_Official::where('position', 'like','%Liga%')->get();
        $ex_officio_3 = Provincial_Official::where('position', 'like','%SK Federation%')->get();


        return view('Normal_View.Provincial_Officials.index', compact('governor', 'vice_governor', 'first_district' , 'second_district', 'third_district', 'ex_officio_1' , 'ex_officio_2', 'ex_officio_3'));
    }
}
