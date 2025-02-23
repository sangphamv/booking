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
                'name' => 'sangphamv',
                'email' => 'sangphamv.ee@gmail.com',
                'password' => Hash::make('sangphamv'),
                'role' => 'admin',
            ],
            [
                'name' => 'sangpham',
                'email' => 'sangpham999x@gmail.com',
                'password' => Hash::make('sangpham'),
                'role' => 'user',
            ],
            [
                'name' => 'adminxyz',
                'email' => 'adminxyz@gmail.com',
                'password' => Hash::make('adminxyz'),
                'role' => 'admin',
            ],
            [
                'name' => 'userxyz',
                'email' => 'userxyz@gmail.com',
                'password' => Hash::make('userxyz'),
                'role' => 'user',
            ],
            [
                'name' => 'admin123',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'user123',
                'email' => 'user123@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
            ],
        ]);
    }
}
