<?php

namespace App\Livewire\Answer;

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
        try {
            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                        [
                            'role' => 'user',
                            'content' => 'Qual o sentido da vida? responda em poucas palavras.'
                        ],
                ]
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        dd($result);
    }
}
