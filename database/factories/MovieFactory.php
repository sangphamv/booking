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
            'title' => $this->faker->sentence,
            'category' => $this->faker->word,
            'duration' => $this->faker->numberBetween(60, 180),
            'release_date' => $this->faker->dateTimeBetween('now', '+30 days')->format('Y-m-d'),            'description' => $this->faker->paragraph,
            'trailer' => $this->faker->url,
            'image' => $this->faker->imageUrl,
            'price' => $this->faker->randomFloat(2, 5, 20),
        ];
    }
}
