<?php

namespace App\Http\Controllers\Normal_View\Citizens_Charter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citizens_Charter;
use App\Models\Pdf_Upload_Cit_Charter;

use DB;
use PDF;

class Citizens_CharterController extends Controller
{
    public function index(){

        $cit_charter = DB::table('citizens_charters')->orderBy('created_at', 'ASC')->get();
        $pdf_cit_charter = Pdf_Upload_Cit_Charter::get();

        return view('Normal_View.Citizens_charter.index', compact('cit_charter', 'pdf_cit_charter'));
    }


    public function download_pdf_citizens_charter( Request $request, $file){

       return response()->download('/home/dilgboho/public_html/pdf_cit_charter/' .$file);

    }
}
