<?php

namespace App\Http\Controllers\Normal_View\Legal_Opinions;

use App\Http\Controllers\Controller;
use App\Models\LegalOpinion;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Legal_OpinionsController extends Controller
{
    public function index()
    {
        $latestOpinion = LegalOpinion::latest()->first();
        $opinions = LegalOpinion::all();

        return view('Normal_View.Legal_Opinions.legal_opinions', compact('latestOpinion', 'opinions'));
    }

    public function showById($id)
    {
        $opinion = LegalOpinion::findOrFail($id);  
        return view('Normal_View.Legal_Opinions.show_opinions', compact('opinion'));
    }    
}
