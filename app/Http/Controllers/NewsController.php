<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id)
{
    $news = Update::findOrFail($id);

    // Debugging: Check if images field is properly formatted
    if ($news->images) {
        $imageArray = json_decode($news->images, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            dd("Invalid JSON format in images field:", $news->images);
        }
    }

    return view('news', compact('news'));
}

}
