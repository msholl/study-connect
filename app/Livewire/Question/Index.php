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
            return view('livewire.question.index')->with('questions', \App\Models\Question::where('status', 'published')
                ->where('category', $this->categoria)
                ->orderBy('created_at', 'desc')
                ->orderBy('votes', 'desc')
                ->get());
        } else {
            return view('livewire.question.index')->with('questions', \App\Models\Question::where('status', 'published')
                ->orderBy('created_at', 'desc')
                ->orderBy('votes', 'desc')
                ->get());
        }
    }
}
