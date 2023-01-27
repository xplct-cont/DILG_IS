<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Pdmu;
use Image;
use File;

class Admin_PdmuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin_View.pdmu.index');
    }
}