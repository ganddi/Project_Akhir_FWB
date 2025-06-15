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
                'name' => 'admin',
                'email' => 'admin@mudahberkemah.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'pemilik',
                'email' => 'pemilik@mudahberkemah.com',
                'password' => Hash::make('123'),
                'role' => 'pemilik',
                'created_at' => now(),
            ],
        ]);
    }
}
