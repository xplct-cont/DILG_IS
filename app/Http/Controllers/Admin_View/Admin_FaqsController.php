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

    public function index(){

        $faq = DB::table('faqs')->get();
        return view('Admin_View.faqs.index', compact('faq'));
    }

    public function store(Request $request){
        
        $faq = new Faq;
       
        $faq->questions = $request->input('questions');
        $faq->answers = $request->input('answers');

        $faq->save();

        return redirect()->back()->with('message', 'Added to FAQ Successfully!');
     
    }

    public function update_faqs(Request $request, $id){
        $faq = Faq::find($id);

        $faq->questions = $request->input('questions');
        $faq->answers = $request->input('answers');
       
    $faq->update();

    return redirect()->back()->with('message', 'FAQ Updated Successfully!');

    }

    public function delete_faqs($id){
        $remove = Faq::findOrFail($id);
        $remove -> delete();
        return redirect()->back()->with('message', 'FAQ Deleted Successfully!');   
      }    


}

