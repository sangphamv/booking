<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tạo 1 user với role là admin
        $this->call([
            UserSeeder::class,
            MovieSeeder::class,
            CinemaSeeder::class,
            ShowtimeSeeder::class,
            SeatSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
