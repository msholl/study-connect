<?php

namespace App\Livewire\Answer;

use Livewire\Attributes\Url;
use Livewire\Component;

class Create extends Component
{
    #[Url]
    public $id = '';

    public function render()
    {
        return view('livewire.answer.create',[
            'question' => \App\Models\Question::find($this->id)
        ]);
    }
}
