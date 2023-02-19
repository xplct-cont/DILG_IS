<?php

namespace App\Http\Controllers\Normal_View\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News_Update;
use DB;

class NewsController extends Controller
{
    public function index(){

        $news_images = News_Update::orderBy('created_at', 'DESC')->get();
        return view('Normal_View.News.index', compact('news_images'));
    }
}
