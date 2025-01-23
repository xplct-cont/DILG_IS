<?php

namespace App\Http\Controllers\Normal_View\Legal_Opinions;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class Legal_OpinionsController extends Controller
{
    public function index(){
        // $legal_opinions = Legal_Opinion::orderBy('date', 'DESC')->get();
        return view('Normal_View.Legal_Opinions.legal_opinions');
    }

    public function show($slug)
    {
        return view('Normal_View.Legal_Opinions.show_opinions');
    }

}
