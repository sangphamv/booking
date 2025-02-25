<?php

namespace Database\Factories;

use App\Models\Seat;
use App\Models\Cinema;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeatFactory extends Factory
{
    protected $model = Seat::class;

    public function definition(): array
    {
        $cinema = Cinema::inRandomOrder()->first();
        return [
            'cinema_id' => $cinema->id,
            'row_num' => $this->faker->numberBetween(1, 10),
            'seat_num' => $this->faker->numberBetween(1, 6),
            'available' => $this->faker->boolean,
        ];
    }
}
