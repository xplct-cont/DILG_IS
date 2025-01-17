<?php

namespace App\Http\Controllers\Normal_View\Legal_Opinions;

use App\Http\Controllers\Controller;


class Legal_OpinionsController extends Controller
{
    public function index(){
        // $legal_opinions = Legal_Opinion::orderBy('date', 'DESC')->get();
        return view('Normal_View.Legal_Opinions.legal_opinions');
    }
}
