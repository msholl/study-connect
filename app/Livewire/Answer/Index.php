<?php

namespace App\Livewire\Answer;

use App\Models\Answer;
use App\Models\Question;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[Url(as:'pergunta')]
    public $id = '';

    public function render()
    {
        return view('livewire.answer.index',[
            'question' => Question::find($this->id),
            'answers' => Answer::with('user')->where('question_id', $this->id)->get()
//            'answers' => Answer::where('question_id', $this->id)->get()
        ]);
    }
}
