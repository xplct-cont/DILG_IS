<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Org;
use Image;
use File;

class Admin_OrganizationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin_View.organization.index');
    }
}