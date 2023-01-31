<?php

namespace App\Http\Controllers\Normal_View\Home;


use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        // $show = DB::table('news')->limit(3)->get();
        return view('Normal_View.Home.home');
    }
}
