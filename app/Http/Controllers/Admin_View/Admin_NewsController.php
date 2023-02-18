<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;

class Admin_NewsController extends Controller
{
    public function index(){
        return view('Admin_View.news.index');
    }

}
