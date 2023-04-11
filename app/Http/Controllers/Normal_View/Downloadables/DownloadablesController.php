<?php

namespace App\Http\Controllers\Normal_View\Downloadables;

use DB;
use App\Models\Faq;
use App\Models\Program;
use App\Models\Downloadable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadablesController extends Controller
{
    public function index(Request $request){
        $programs = Program::all();
        $downloadables = Downloadable::when($request->program_id != null, function($q) use ($request){
            return $q->where('program_id', $request->program_id);
        })
        ->when($request->search != null, function($q) use ($request){
            return $q->where('outcome_area', 'LIKE', '%'. $request->search . '%')
                    ->orWhere('title', 'LIKE', '%'. $request->search . '%');
        })
        ->orderBy("created_at","DESC")
        ->paginate(20);

        return view('Normal_View.Downloadables.index', compact('downloadables', 'programs'))
        ->with('i',(request()->input('page',1)-1)*5);

    }

    public function download_downloadables( Request $request, $file){

        return response()->download('/home/dilgboho/public_html/downloadables/'.$file);

    }
}
