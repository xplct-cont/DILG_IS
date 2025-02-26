<?php

namespace App\Http\Livewire\Normal\Legalopinions;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LegalOpinion;
use Illuminate\Support\Str;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory = '';
    public $loFilter = '';
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function updatingLoFilter()
    {
        $this->resetPage();
    }

    private function getHighlightedPreview($text, $keyword, $length = 150)
    {
        if (empty($text) || empty($keyword)) {
            return null;
        }

        $pos = stripos($text, $keyword);
        if ($pos === false) {
            return null;
        }

        $start = max(0, $pos - 50);
        $snippet = substr($text, $start, $length);

        $highlighted = str_ireplace($keyword, "<strong class='bg-yellow-200 px-1'>$keyword</strong>", $snippet);

        return "... " . $highlighted . " ...";
    }

    private function highlightKeyword($text, $keyword)
    {
        if (empty($text) || empty($keyword)) {
            return $text;
        }

        return str_ireplace($keyword, "<strong class='bg-yellow-200 px-1'>$keyword</strong>", $text);
    }

    public function render()
    {
        $categories = LegalOpinion::distinct('category')
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->orderBy('category', 'asc')
            ->pluck('category');

        $query = LegalOpinion::query();

        if (!empty($this->selectedCategory)) {
            $query->where('category', 'like', '%' . $this->selectedCategory . '%');
        }

        if (!empty($this->search)) {
            $query->where(function ($subQuery) {
                $subQuery->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('reference', 'like', '%' . $this->search . '%')
                    ->orWhere('date', 'like', '%' . $this->search . '%')
                    ->orWhere('extracted_texts', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->loFilter === 'lo_only') {
            $query->where('title', 'LIKE', 'LO-%');
        } elseif ($this->loFilter === 'dilg_lo') {
            $query->where('title', 'LIKE', 'DILG LO No.%');
        } elseif ($this->loFilter === 'both') {
            $query->where(function ($subQuery) {
                $subQuery->where('title', 'LIKE', 'LO-%')
                    ->orWhere('title', 'LIKE', 'DILG LO No.%');
            });
        }

        $opinions = $query->paginate(50);

        $opinions->transform(function ($opinion) {
            if (!empty($this->search)) {
                $opinion->highlighted_title = $this->highlightKeyword($opinion->title, $this->search);

                if (!empty($opinion->extracted_texts)) {
                    $opinion->preview_text = $this->getHighlightedPreview($opinion->extracted_texts, $this->search);
                } else {
                    $opinion->preview_text = null;
                }
            } else {
                $opinion->highlighted_title = $opinion->title;
                $opinion->preview_text = null;
            }

            return $opinion;
        });

        return view('livewire.normal.legalopinions.index', [
            'opinions' => $opinions,
            'categories' => $categories,
        ]);
    }

}
