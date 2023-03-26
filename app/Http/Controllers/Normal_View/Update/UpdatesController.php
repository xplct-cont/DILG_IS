<?php

namespace App\Http\Controllers\Normal_View\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update;
use App\Models\Updates_Image;
use DB;

class UpdatesController extends Controller
{
    public function index(){

        $updates_images = Updates_Image::all();
        $news_images = Update::where('status', true)->orderBy('created_at', 'ASC')->get();
        return view('Normal_View.Updates.index', compact('news_images', 'updates_images'));
    }
}
