<?php

namespace App\Http\Controllers\Normal_View\Home;


use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\Municipality;
use App\Models\Program;
use App\Models\Home_Image;
use App\Models\Update;
use App\Models\Bohol_Issuance;

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
        $news_images = Update::orderBy('created_at', 'DESC')->limit(6)->get();
        $home_images = Home_Image::all();
        $latest_issuances = Bohol_Issuance::orderBy('date', 'DESC')->limit(8)->get();
        return view('Normal_View.Home.home', compact( 'home_images', 'news_images', 'latest_issuances'));
    }
}
