<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => implode(' ', $this->faker->words(7)),
            'category' => $this->faker->word,
            'duration' => $this->faker->numberBetween(90, 180),
            'release_date' => $this->faker->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
            'description' => $this->faker->paragraph,
            'trailer' => $this->faker->url,
            'image' => 'https://source.unsplash.com/random/800x600',
            'price' => $this->faker->randomFloat(2, 5, 20),
        ];
    }
}
