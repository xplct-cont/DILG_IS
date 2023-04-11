<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Bohol_Issuance;
use Image;
use File;
use Illuminate\Support\Facades\Validator;

class Admin_Bohol_IssuancesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $b_issuances = Bohol_Issuance::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($b_issuances = $request->b_issuances)){
                    $query->orWhere('outcome_area', 'LIKE', '%'. $b_issuances . '%')
                    ->orWhere('category', 'LIKE', '%'. $b_issuances . '%')
                    ->orWhere('title', 'LIKE', '%'. $b_issuances . '%')
                    ->orWhere('reference_num', 'LIKE', '%'. $b_issuances . '%')->get();

                }
            }]
        ])

        ->orderBy("date","DESC")
        ->paginate(15);

        return view('Admin_View.bohol_issuances.index', compact('b_issuances'))
        ->with('i',(request()->input('page',1)-1)*5);
    }


    public function store(Request $request){

        $checkPdf = $request->validate([
            'file' => 'nullable|mimes:pdf',
            'message' => 'You can only upload PDF files',
            ]);

            $issuances = new Bohol_Issuance;

            $issuances->outcome_area = $request->input('outcome_area');
            $issuances->date = $request->input('date');
            $issuances->category = $request->input('category');
            $issuances->title = $request->input('title');
            $issuances->reference_num = $request->input('reference_num');

        if($request->hasFile('file')){

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('/home/dilgboho/public_html/issuance_files/', $filename);
            $issuances->file = $filename;


          }

        $issuances->save();

        return redirect()->back()->with('message', 'Added Successfully!');

    }


    public function update_issuances(Request $request, $id){

        $request->validate([
            'file' => 'nullable|mimes:pdf'
            ]);
            $issuances = Bohol_Issuance::find($id);

            $issuances->outcome_area = $request->input('outcome_area');
            $issuances->date = $request->input('date');
            $issuances->category = $request->input('category');
            $issuances->title = $request->input('title');
            $issuances->reference_num = $request->input('reference_num');

        if($request->hasFile('file')){

            $destination = '/home/dilgboho/public_html/issuance_files/'.$issuances->file;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('/home/dilgboho/public_html/issuance_files/', $filename);
            $issuances->file = $filename;


          }

        $issuances->update();

    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_issuances($id){
        $issuances = Bohol_Issuance::find($id);
            $destination = '/home/dilgboho/public_html/issuance_files/'.$issuances->file;
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $issuances->delete();

        return redirect()->back()->with('message', 'Deleted Successfully!');
      }


}












