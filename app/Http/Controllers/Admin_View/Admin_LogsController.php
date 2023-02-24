<?php

namespace App\Http\Controllers\Admin_View;

use App\Models\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;




class Admin_LogsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){



        return view('Admin_View.logs.index');


    }



}
