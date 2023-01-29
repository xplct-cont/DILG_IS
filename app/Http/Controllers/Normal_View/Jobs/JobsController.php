<?php

namespace App\Http\Controllers\Normal_View\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use DB;

class JobsController extends Controller
{
    public function index(){

        $jobs = DB::table('jobs')->orderBy('created_at', 'DESC')->get();
        return view('Normal_View.Jobs.index', compact('jobs'));
    }
}
