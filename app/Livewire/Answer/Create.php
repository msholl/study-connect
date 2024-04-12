<?php

namespace App\Livewire\Answer;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Url;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

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

    public function openAi()
    {
        $question = \App\Models\Question::find($this->id)->body;
        try {
            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                        [
                            'role' => 'user',
                            'content' => 'Responda em poucas palavras, qual a resposta para a pergunta: '.$question.'?',
                        ],
                ]
            ]);
        } catch (\Exception $e) {
            throw ValidationException::withMessages([ 'title' => 'Erro ao tentar criar a resposta']);
        }
//        dd($result->choices[0]->message->content);
        $answer = new \App\Models\Answer([
            'question_id' => $this->id,
            'user_id' => auth()->id(),
            'body' => $result->choices[0]->message->content,
            'votes' => 0,
            'ai_generated' => true
        ]);
        $answer->save();
        return $this->redirect('/respostas?pergunta='.$this->id);
    }
}
