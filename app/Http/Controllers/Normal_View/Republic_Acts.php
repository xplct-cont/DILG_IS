<?php

namespace App\Http\Controllers\Normal_View;

use App\Http\Controllers\Controller;
use App\Models\RepublicAct;
use Illuminate\Http\Request;

class Republic_Acts extends Controller
{
    public function index()
    {
        $latestAct = RepublicAct::latest()->first();
        $acts = RepublicAct::all();

        return view('Normal_View.Issuances.republic_acts', compact('latestAct', 'acts'));
    }

    public function showById($id)
    {
        $act = RepublicAct::findOrFail($id);  // Use findOrFail with id
        return view('Normal_View.Issuances.show_acts', compact('act'));
    }    
}
