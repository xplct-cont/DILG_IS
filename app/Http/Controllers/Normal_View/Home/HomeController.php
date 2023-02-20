<?php

namespace App\Http\Controllers\Normal_View\Home;


use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Municipality;
use App\Models\Program;
use App\Models\Home_Image;
use App\Models\Update;

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
        $news_images = Update::orderBy('created_at', 'ASC')->limit(3)->get();
        $projectsAll = Project::limit(4)->get();
        $home_images = Home_Image::all();
        return view('Normal_View.Home.home', compact('projectsAll', 'home_images', 'news_images'));
    }
}
