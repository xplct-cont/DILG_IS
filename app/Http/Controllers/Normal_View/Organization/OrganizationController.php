<?php

namespace App\Http\Controllers\Normal_View\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Pdmu;
use DB;

class OrganizationController extends Controller
{
    public function index(){

      //ORGANIZATIONAL STRUCTURE

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


      
        $admin_ser = DB::table('orgs')->where('position', 'like','ADA%')
        ->orWhere('position', 'like','AAS%')
        ->orWhere('position', 'like','Admin%')
        ->orWhere('position', 'like','IO%')
        ->orWhere('position', 'like', 'AO%')
        ->get();


        //PDMU

        $pd_pdmu = DB::table('pdmus')->where('position', 'Provincial Director')->get();
        $head_pdmus = DB::table('pdmus')->where('id', '=', 2)->get();
        $member_pdmus = DB::table('pdmus')->where('id', '=', 3)
        ->orWhere('id', '=', 4)->orderBy('id', 'asc')->get();
        $member_pdmus_2 = DB::table('pdmus')->where('id', '=', 5)
        ->orWhere('id', '=', 6)->orderBy('id', 'asc')->get();
        $member_pdmus_3 = DB::table('pdmus')->where('id', '=', 7)->orderBy('id', 'asc')->get();
        $engrs = DB::table('pdmus')->where('id', '>', 7)->get();


        return view('Normal_View.Organization.organization', compact('pd', 'head', 'head_2', 'd_one','admin_ser',
        'pd_pdmu', 'head_pdmus', 'member_pdmus', 'member_pdmus_2', 'member_pdmus_3', 'engrs'));
    }

}
