<?php

namespace App\Http\Controllers\Admin_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Faq;
use Image;
use File;

class Admin_FaqsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        // $faq = DB::table('faqs')->get();

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

        return view('Admin_View.faqs.index', compact('faq'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    public function store(Request $request){
        
        $faq = new Faq;
       
        $faq->outcome_area = $request->input('outcome_area');
        $faq->questions = $request->input('questions');
        $faq->answers = $request->input('answers');

        $faq->save();

        return redirect()->back()->with('message', 'Added Successfully!');
     
    }

    public function update_faqs(Request $request, $id){
        $faq = Faq::find($id);

        $faq->outcome_area = $request->input('outcome_area');
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

