<?php

namespace App\Http\Controllers\Admin_View;

use File;
use App\Models\Program;
use App\Models\Downloadable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Admin_DownloadablesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $downloadables = Downloadable::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($downloadables = $request->downloadables)){
                    $query->orWhere('title', 'LIKE', '%'. $downloadables . '%')->get();

                }
            }]
        ])

        ->orderBy("created_at","DESC")
        ->paginate(12);
        $programs = Program::all();
        return view('Admin_View.downloadables.downloadables', compact('downloadables', 'programs'))
        ->with('i',(request()->input('page',1)-1)*5);

    }

    public function store(Request $request){
        $request->validate([
            'file' => 'nullable|mimes:pdf'
            ]);
        $downloadables = new Downloadable;

        $downloadables->title = $request->input('title');
        $downloadables->link = $request->input('link');
        $downloadables->outcome_area = $request->input('outcome_area');
        $downloadables->program_id = $request->input('program_id');

        if($request->hasFile('file')){

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('/home/dilgboho/public_html/downloadables/', $filename);
            $downloadables->file = $filename;

          }

        $downloadables->save();

        return redirect()->back()->with('message', 'Added Successfully!');

    }

    public function storeProgram(Request $request){

        $prog = new Program;

        $prog->title = $request->input('title');

        $prog->save();

        return redirect()->back()->with('message', 'Program Added! You may now add your FAQ');

    }

    public function update_downloadables(Request $request, $id){

        $request->validate([
            'file' => 'nullable|mimes:pdf'
            ]);
        $downloadables = Downloadable::find($id);

        $downloadables->title = $request->input('title');
        $downloadables->link = $request->input('link');
        $downloadables->outcome_area = $request->input('outcome_area');
        $downloadables->program_id = $request->input('program_id');

        if($request->hasFile('file')){

            $destination = '/home/dilgboho/public_html/downloadables/'.$downloadables->file;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $request->file('file')->move('/home/dilgboho/public_html/downloadables/', $filename);
            $downloadables->file = $filename;


          }
    $downloadables->update();

    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_downloadables($id){
        $remove = Downloadable::findOrFail($id);
        $destination = '/home/dilgboho/public_html/downloadables/' .$remove->file;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $remove -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
      }


}
