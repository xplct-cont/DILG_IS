<?php

namespace App\Http\Controllers\Normal_View\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use DB;

class OrganizationController extends Controller
{
    public function index(){


        $pd = DB::table('orgs')->where('position', 'Provincial Director')->get();
        $head = DB::table('orgs')->where('id', '=', 2)
        ->orWhere('id', '=', 3)->orderBy('id', 'asc')->get();
        $head_2 = DB::table('orgs')->where('id', '=', 4)->get();
        $d_one = DB::table('orgs')->where([['id', '>', 4], ['position','not like', '%ADA%'],
         ['position','not like', '%AAS%'],
         ['position','not like', '%Admin%'],
         ['position','not like', '%IO%'],
         ['position','not like', '%AO%']])
        ->orderBy('position', 'desc')->get();


      
        $admin_ser = DB::table('orgs')
        ->where([

            // ['id', '>', 4],
            // ['position', 'like','%ADA%'],
            ['position', 'like', '%AAS%'],
            // ['position', 'like', '%Admin%'],
            // ['position', 'like', '%IO%'],
            // ['position', 'like', '%AO%']
        ])
        ->get();
        return view('Normal_View.Organization.organization', compact('pd', 'head', 'head_2', 'd_one','admin_ser'));
    }

}
