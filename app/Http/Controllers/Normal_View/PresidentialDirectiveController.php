<?php

namespace App\Http\Controllers\Normal_View;

use App\Http\Controllers\Controller;
use App\Models\PresidentialDirective;
use Illuminate\Http\Request;

class PresidentialDirectiveController extends Controller
{
    public function index()
    {
        $latestDirective = PresidentialDirective::latest()->first();
        $directives = PresidentialDirective::all();

        return view('Normal_View.Issuances.presidential_directives', compact('latestDirective', 'directives'));
    }

    public function showById($id)
    {
        $directive = PresidentialDirective::findOrFail($id);  // Use findOrFail with id
        return view('Normal_View.Issuances.show_directives', compact('directive'));
    }   
}
