<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin123',
                'email' => 'sangphamv.ee@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'user123',
                'email' => 'sangpham999x@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
            ],
        ]);
//        User::factory(2)->create(); // Tạo 2 user
    }
}
