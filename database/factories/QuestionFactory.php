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
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'user_id' => $this->factoryForModel(\App\Models\User::class)->create()->id,
            'category' => $this->faker->randomElement(['programacao', 'algoritmo', 'matematica','dados', 'redes', 'ia']),
            'votes' => $this->faker->numberBetween(0, 18),
            'answers' => 0,
            'status' => 'published',
        ];
    }
}
