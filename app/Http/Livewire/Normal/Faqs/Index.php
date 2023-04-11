<?php

namespace App\Http\Livewire\Normal\Faqs;

use App\Models\Faq;
use App\Models\Program;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $search;
    public $questions, $answers, $program_id, $outcome = 'all';
    public $faqs;


    public function loadfaqs(){

        $query = Faq::search($this->search);

            if($this->outcome != 'all'){
                $query->where('outcome_area', $this->outcome);
            }

            if($this->program_id){
                $query->where('program_id', $this->program_id);
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

<<<<<<< HEAD
    public function mount()
    {
        $this->faqs = Faq::with('program')->get();
    }
    public function render()
    {
        $faqs = Faq::with('program')->get();
        return view('livewire.normal.faqs.index', compact($faqs) );
=======
    public function render()
    {
        $programs = Program::all();

        if ($this->outcome != 'all' || $this->program_id || $this->answers || $this->questions || $this->search) {
            $faq = $this->loadfaqs()['faq'];
        } else {
            $faq = collect();
        }
        return view('livewire.normal.faqs.index', compact('faq', 'programs'));
        //return view('livewire.normal.faqs.index', $this->loadfaqs(), compact('programs'));
>>>>>>> 4b968ba71da0fb852f35452ce3772140efdb6938

    }
}
