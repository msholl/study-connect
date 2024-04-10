<?php

namespace App\Livewire\Question;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required', 'min:3', 'max:60')]
    public string $title = '';

    #[Validate('required', 'min:10', 'max:500')]
    public string $body = '';

    #[Validate('required')]
    public string $category;
    private int $user_id;

    public function render()
    {
        return view('livewire.question.create');
    }

    public function save()
    {
        $question = new Question([
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category,
            'user_id' => Auth::id(),
            ]);
        $question->save();

        session()->flash('message', 'Pergunta criada com sucesso!');

        return redirect('/');
    }
}
