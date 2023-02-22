<?php

namespace App\Http\Controllers\Normal_View\Downloadables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Downloadable;
use DB;

class DownloadablesController extends Controller
{
    public function index(){

        $downloadables = DB::table('downloadables')->orderBy('created_at', 'DESC')->get();
        return view('Normal_View.Downloadables.index', compact('downloadables'));
    }
}
