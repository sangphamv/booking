<?php

namespace Database\Factories;

use App\Models\Showtime;
use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowtimeFactory extends Factory
{
    protected $model = Showtime::class;

    public function definition(): array
    {
        $startTime = $this->faker->dateTimeBetween('now', '+3 days');
        $minuteOptions = [0, 15, 30, 45];
        $randomMinute = $minuteOptions[array_rand($minuteOptions)];
        $randomHour = rand(10, 23);
        $startTime->setTime($randomHour, $randomMinute);
        $endTime = (clone $startTime)->modify('+2 hours');

        $movie = Movie::inRandomOrder()->first();
        $cinema = Cinema::inRandomOrder()->first();

        if (!$movie) {
            throw new \Exception('No movies found in the database.');
        }

        if (!$cinema) {
            throw new \Exception('No cinemas found in the database.');
        }

        return [
            'movie_id' => $movie->id,
            'cinema_id' => $cinema->id,
            'start_time' => $startTime,
            'end_time' => $endTime,
        ];
    }
}
