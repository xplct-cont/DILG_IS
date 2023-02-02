<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Admin_HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $news = DB::table('news')->count();
        // $projects = DB::table('projects')->count();
        $jobs = DB::table('jobs')->count();
        $orgs = DB::table('orgs')->count();
        $pdmus = DB::table('pdmus')->count();
        $lgus = DB::table('lgus')->count();
        return view('Admin_View.layouts.home',compact('news', 'jobs','orgs', 'pdmus', 'lgus'));
    }
}
