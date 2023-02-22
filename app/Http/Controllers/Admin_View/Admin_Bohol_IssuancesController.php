<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Bohol_Issuance;
use App\Models\OutComeArea;
use Image;
use File;
use Illuminate\Support\Facades\Validator;

class Admin_Bohol_IssuancesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $b_issuances = Bohol_Issuance::with('outcomearea')->get();
        $outcomes = OutComeArea::get();
        return view('Admin_View.bohol_issuances.index', compact('b_issuances', 'outcomes'));
    }


    public function store(Request $request){


        $request->validate([
            'file' => 'required|mimes:pdf|max:2048'
            ]);
            $issuances = new Bohol_Issuance;

            $issuances->outcome = $request->input('outcome');
            $issuances->date = $request->input('date');
            $issuances->category = $request->input('category');
            $issuances->title = $request->input('title');
            $issuances->reference_num = $request->input('reference_num');

        if($request->hasFile('file')){

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move(public_path('/issuance_files/'), $filename);
            $issuances->file = $filename;

            // storeAs('issuance_files', $filename, 'public');
            // $issuances->file = '/public/issuance_files' . $filePath;;
            // $issuances->file = $filename;

          }

        $issuances->save();

        return redirect()->back()->with('message', 'Added to Issuances Successfully!');

    }


    public function update_issuances(Request $request, $id){

        $request->validate([
            'file' => 'required|mimes:pdf|max:2048'
            ]);
            $issuances = Bohol_Issuance::find($id);

            $issuances->outcome = $request->input('outcome');
            $issuances->date = $request->input('date');
            $issuances->category = $request->input('category');
            $issuances->title = $request->input('title');
            $issuances->reference_num = $request->input('reference_num');

        if($request->hasFile('file')){

            $destination = 'issuance_files/'.$issuances->file;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move(public_path('/issuance_files/'), $filename);
            $issuances->file = $filename;

            // $issuances->file = '/public/issuance_files' . $filePath;;
            // $issuances->file = $filename;

          }

        $issuances->update();

    return redirect()->back()->with('message', 'Issuance Updated Successfully!');

    }

    public function delete_issuances($id){
        $issuances = Bohol_Issuance::find($id);
            $destination = public_path('issuance_files/'.$issuances->file);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $issuances->delete();

        return redirect()->back()->with('message', 'Issuance Deleted Successfully!');
      }


}












