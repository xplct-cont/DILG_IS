<?php

namespace App\Http\Controllers\Admin_View;

use DB;
use File;
use Image;
use App\Models\Faq;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Admin_FaqsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){


        $faq = Faq::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($faq = $request->faq)){
                    $query->orWhere('outcome_area', 'LIKE', '%'. $faq . '%')
                    ->orWhere('questions', 'LIKE', '%'. $faq . '%')
                    ->orWhere('answers', 'LIKE', '%'. $faq . '%')->get();

                }
            }]
        ])

        ->orderBy("created_at","DESC")
        ->paginate(12);
            $programs = Program::all();
        return view('Admin_View.faqs.index', compact('faq', 'programs'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function store(Request $request){

        $faq = new Faq;

        $faq->outcome_area = $request->input('outcome_area');
        $faq->program_id = $request->input('program_id');
        $faq->questions = $request->input('questions');
        $faq->answers = $request->input('answers');

        $faq->save();

        return redirect()->back()->with('message', 'Added Successfully!');

    }
    public function storeProgram(Request $request){

        $prog = new Program;

        $prog->title = $request->input('title');

        if(Program::where('title',$prog->title)->exists()){
           return redirect()->back()->with('error','Program already exist!');
        }else{
            $prog->save();
            return redirect()->back()->with('message', 'Program Added! You may now add your FAQ');

        }






    }

    public function update_faqs(Request $request, $id){
        $faq = Faq::find($id);

        $faq->outcome_area = $request->input('outcome_area');
        $faq->program_id = $request->input('program_id');
        $faq->questions = $request->input('questions');
        $faq->answers = $request->input('answers');

    $faq->update();

    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_faqs($id){
        $remove = Faq::findOrFail($id);
        $remove -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
      }


}

