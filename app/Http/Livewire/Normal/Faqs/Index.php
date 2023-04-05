<?php

namespace App\Http\Livewire\Normal\Faqs;

use App\Models\Faq;
use Livewire\Component;

class Index extends Component
{
    public $search;
    public $questions, $answers, $program, $outcome = 'all';
    public function loadfaqs(){

        $query = Faq::orderBy('created_at', 'desc')
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
    public function render()
    {
        $faq = Faq::where('outcome_area', 'like', '%'.$this->search.'%')
            ->orWhere('questions', 'like', '%'.$this->search.'%')
            ->orWhere('answers', 'like', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.normal.faqs.index', $this->loadfaqs());
    }
}
