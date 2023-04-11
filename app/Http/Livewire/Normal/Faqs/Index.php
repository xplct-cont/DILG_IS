<?php

namespace App\Http\Livewire\Normal\Faqs;

use App\Models\Faq;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $search;
    public $questions, $answers, $program, $outcome = 'all';
    public function loadfaqs(){

        $query = Faq::groupBy('program')
            ->search($this->search);

            if($this->outcome != 'all'){
                $query->where('outcome_area', $this->outcome);
            }

            if($this->program){
                $query->where('program', $this->program);
            }
            if($this->answers){
                $query->where('answers', $this->answers);
            }
            if($this->questions){
                $query->where('questions', $this->questions);
            }

            $faq = $query->paginate(5);
            return compact('faq');
    }
    // public function test(){

    //     $faqs = DB::select('SELECT program, questions, answers FROM faqs WHERE program = (SELECT program FROM faqs WHERE program = ?)', [$program]);

    //     return
    // }
    public function render()
    {
        // $faq = Faq::where('outcome_area', 'like', '%'.$this->search.'%')
        //     ->orWhere('questions', 'like', '%'.$this->search.'%')
        //     ->orWhere('answers', 'like', '%'.$this->search.'%')
        //     ->orderBy('created_at', 'desc')->paginate(5);
        $faqs = Faq::groupBy('program')->get();
        // return view('livewire.normal.faqs.index', compact('faq'));

        $faqs = DB::table('faqs')
        ->whereIn('program', function ($query) {
            $query->select('program')
                ->from('faqs')
                ->groupBy('program')
                ->havingRaw('COUNT(*) > 1');
        })
        ->get();
        return view('livewire.normal.faqs.index', compact('faqs'), $this->loadfaqs());

    }
}
