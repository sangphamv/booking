<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'Cinema SHOKARTH TAN PHU - RAP 1',
                'location' => '12 Trịnh Đình Thảo, Phường Hòa Thạnh, Quận Tân Phú, Thành phố Hồ Chí Minh',
            ],
            [
                'name' => 'Cinema SHOKARTH TAN PHU - RAP 2',
                'location' => '12 Trịnh Đình Thảo, Phường Hòa Thạnh, Quận Tân Phú, Thành phố Hồ Chí Minh',
            ],
            [
                'name' => 'Cinema SHOKARTH BINH TAN - RAP 1',
                'location' => '12 Tên Lửa, Phường Bình Trị Đông B, Quận Bình Tân, Thành phố Hồ Chí Minh',
            ],
            [
                'name' => 'Cinema SHOKARTH BINH TAN - RAP 2',
                'location' => '12 Tên Lửa, Phường Bình Trị Đông B, Quận Bình Tân, Thành phố Hồ Chí Minh',
            ],
        ]);
    }
}
