<?php

namespace App\Http\Controllers\Normal_View\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        return view('Normal_View.Jobs.index');
    }
}
