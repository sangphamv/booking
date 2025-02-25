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
        static $seatCounter = 0;
        $cinema = Cinema::inRandomOrder()->first();
        $row_num = intdiv($seatCounter, 6) + 1;
        $seat_num = ($seatCounter % 6) + 1;
        $seatCounter++;

        return [
            'cinema_id' => $cinema->id,
            'row_num' => $row_num,
            'seat_num' => $seat_num,
            'available' => $this->faker->boolean,
        ];
    }
}
