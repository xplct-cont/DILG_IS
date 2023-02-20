<?php

namespace App\Http\Controllers\Normal_View\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update;
use DB;

class UpdatesController extends Controller
{
    public function index(){

        $news_images = Update::orderBy('created_at', 'ASC')->get();
        return view('Normal_View.Updates.index', compact('news_images'));
    }
}
