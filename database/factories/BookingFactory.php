<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use App\Models\Showtime;
use App\Models\Seat;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $showtime = Showtime::inRandomOrder()->first();
        $seat = Seat::inRandomOrder()->first();

        if (!$user) {
            throw new \Exception('No users found in the database.');
        }

        if (!$showtime) {
            throw new \Exception('No showtimes found in the database.');
        }

        if (!$seat) {
            throw new \Exception('No seats found in the database.');
        }

        $faker = \Faker\Factory::create('vi_VN');

        return [
            'user_id' => $user->id,
            'showtime_id' => $showtime->id,
            'seat_id' => $seat->id,
            'payment_status' => $this->faker->randomElement(['Chờ xử lý', 'Hoàn thành']),
            'customer_name' => $faker->name,
            'customer_email' => $faker->email,
        ];
    }
}
