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
                'name' => 'Cinema Tân Bình',
                'location' => '12 Trịnh Đình Thảo, Phường Hòa Thạnh, Quận Tân Phú, Thành phố Hồ Chí Minh',
            ],
            [
                'name' => 'Cinema Quận 6',
                'location' => '24 Đường số 1, Phường 1, Quận 6, Thành phố Hồ Chí Minh',
            ],
        ]);
//        Cinema::factory(0)->create(); // Create 10 cinemas
    }
}
