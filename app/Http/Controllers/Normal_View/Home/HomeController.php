<?php

namespace App\Http\Controllers\Normal_View\Home;


use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Municipality;
use App\Models\Program;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $show = DB::table('news')->limit(3)->get();
        $projectsAll = Project::all();
        return view('Normal_View.Home.home', compact('projectsAll'));
    }
}
