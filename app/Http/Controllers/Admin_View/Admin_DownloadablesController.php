<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Downloadable;


class Admin_DownloadablesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $downloadables = Downloadable::orderBy('created_at', 'DESC')->get();

        return view('Admin_View.downloadables.downloadables', compact('downloadables'));

    }

}
