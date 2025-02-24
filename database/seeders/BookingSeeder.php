<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            [
                'user_id' => '1',
                'showtime_id' => '1',
                'seat_id' => '1',
                'payment_status' => 'Pending',
                'customer_name' => 'SangPham',
                'customer_email' => 'sangphamv@gmail.com',
            ],
        ]);
    }
}
