<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin Toko',
                'email' => 'admin@mudahberkemah.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Budi Santoso',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'penyewa',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Owner Toko',
                'email' => 'owner@mudahberkemah.com',
                'password' => Hash::make('password123'),
                'role' => 'owner',
                'created_at' => now(),
            ],
        ]);
    }
}
