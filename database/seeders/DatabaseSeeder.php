<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'matheus',
            'email' => 'm.sholl@hotmail.com',
            'password' => bcrypt('mat9312'),
        ]);

        User::factory(25)->create();

        for ($i = 0; $i < 14; $i++) {
            $answers = rand(0, 6);
            $question = Question::factory()->create([
                'answers' => $answers,
            ]);
            if ($answers > 0) {
                $votes = rand(0, 10);
                for ($j = 0; $j < $answers; $j++){
                    Answer::factory(1)->create([
                        'question_id' => $question->id,
                        'user_id' => rand(1, 15),
                        'votes' => $votes,
                    ]);
                    if ($votes > 0) {
                        Vote::factory($votes)->create([
                            'user_id' => rand(1, 15),
                            'answer_id' => $j + 1,
                        ]);
                    }
                }
            }
        }
    }
}
