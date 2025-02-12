<?php

namespace App\Http\Controllers\Normal_View;

use App\Http\Controllers\Controller;
use App\Models\DraftIssuance;
use Illuminate\Http\Request;

class DraftIssuanceController extends Controller
{
    public function index()
    {
        $latestDraft = DraftIssuance::latest()->first();
        $drafts = DraftIssuance::all();

        return view('Normal_View.Issuances.draft_issuances', compact('latestDraft', 'drafts'));
    }

    public function showById($id)
    {
        $draft = DraftIssuance::findOrFail($id);  // Use findOrFail with id
        return view('Normal_View.Issuances.show_drafts', compact('draft'));
    } 
}
