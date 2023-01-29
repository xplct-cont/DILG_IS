<?php

namespace App\Http\Controllers\Normal_View\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use DB;

class OrganizationController extends Controller
{
    public function index(){

        $orgs = DB::table('orgs')->get();
        return view('Normal_View.Organization.organization', compact('orgs'));
    }
}
