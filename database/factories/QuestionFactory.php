<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'category' => $this->faker->randomElement([
                "algoritmo","matematica","arquitetura de software", "rede de computadores", "banco de dados","segurança da informação"
            ]),
            'votes_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}
