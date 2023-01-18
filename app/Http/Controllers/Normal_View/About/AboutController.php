<?php

namespace App\Http\Controllers\Normal_View\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        view('Normal_View.About.index');
    }
}
