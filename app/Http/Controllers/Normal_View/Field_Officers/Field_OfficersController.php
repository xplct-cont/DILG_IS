<?php

namespace App\Http\Controllers\Normal_View\Field_Officers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Field_Officer;
use DB;

class Field_OfficersController extends Controller
{
    public function index(){

        $field_officers = Field_Officer::with(['municipality'])->orderBy('position', 'ASC')->get();
        return view('Normal_View.Field_Officers.field_officers', compact('field_officers'));
    }
}