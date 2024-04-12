<?php

namespace App\Livewire\Question;

use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[Url]
    public $categoria ='';

    public function render()
    {
        if ($this->categoria != '') {
            $questions = \App\Models\Question::where('status', 'published')
                ->where('category', $this->categoria)
                ->orderBy('created_at', 'desc')
                ->get();
            return view('livewire.question.index')->with([
                'questions' => $questions,
                'categoria' => $this->categoria]);
        } else {
            return view('livewire.question.index')->with('questions', \App\Models\Question::where('status', 'published')
                ->orderBy('created_at', 'desc')
                ->get());
        }
    }
}
