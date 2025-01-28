<?php

namespace App\Http\Controllers\Normal_View\Legal_Opinions;

use App\Http\Controllers\Controller;
use App\Models\LegalOpinion;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\LegalOpinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Legal_OpinionsController extends Controller
{
//     public function store(Request $request)
//     {
//         // Validate and store the new legal opinion in DILG
//         $validated = $request->validate([
//             'title' => 'required|string',
//             'link' => 'required|string',
//             'category' => 'nullable|string',
//             'reference' => 'required|string|unique:legal_opinions',
//             'date' => 'nullable|string',
//         ]);

//         $legalOpinion = LegalOpinion::create($validated);

//         // Send the legal opinion data to Tangkaraw via the webhook
//         Http::post('http://127.0.0.1:8000/webhook/legal-opinion', $validated);

//         return response()->json($legalOpinion, 201);
//     }
    
//     public function index() {
//         $legal_opinions = LegalOpinion::get();
//         return view('livewire.normal.legalopinions.index', compact('legal_opinions'));
//     }

//     public function show($slug)
// use App\Models\LegalOpinion;
// use Illuminate\Support\Facades\Response;
// use Illuminate\Support\Facades\Storage;

// class Legal_OpinionsController extends Controller
// {
    public function index()
    {
        $latestOpinion = LegalOpinion::latest()->first();
        $opinions = LegalOpinion::all();

        return view('Normal_View.Legal_Opinions.legal_opinions', compact('latestOpinion', 'opinions'));
    }

    public function showById($id)
    {
        $opinion = LegalOpinion::findOrFail($id);  // Use findOrFail with id
        return view('Normal_View.Legal_Opinions.show_opinions', compact('opinion'));
    }    
}
