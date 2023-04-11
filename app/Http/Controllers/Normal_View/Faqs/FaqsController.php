<?php

namespace App\Http\Controllers\Normal_View\Faqs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use DB;

class FaqsController extends Controller
{
    public function index(){

        $faq = Faq::orderBy('program_id', 'ASC')->get();
        return view('Normal_View.Faqs.faqs', compact('faq'));
    }
}
