<?php

namespace App\Livewire\Answer;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[Url(as:'pergunta')]
    public $id = '';

    public function render()
    {
//        dd(Answer::with('user')->where('question_id', $this->id)->get());
            return view('livewire.answer.index',[
                'question' => Question::with('user')->find($this->id),
//                'question' => Question::find($this->id),
                'answers' => Answer::with('user')->where('question_id', $this->id)->get()
            ]);
    }
    // Criação do método vote
    public function vote($answer_id): void
    {
        $vote = Vote::where('answer_id', $answer_id)->where('user_id', Auth::user()->id)->first();
        $answer = Answer::find($answer_id);
//        Se o usuário já votou, o voto é removido.
        if ($vote != null){
            $vote->delete();
            $answer->votes -=  1;
            $answer->save();
        }
//        Se o usuário não votou, o voto é criado.
        else {
            $userVote = new Vote([
                'answer_id' => $answer_id,
                'user_id' => Auth::user()->id,
            ]);
            $userVote->save();
            $answer->votes += 1;
            $answer->save();
        }
    }
}
