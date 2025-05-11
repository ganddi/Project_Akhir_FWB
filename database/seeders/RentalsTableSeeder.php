<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('rentals')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'total_price' => 120000.00,
                'rental_status' => 'dipinjam',
                'start_date' => '2025-05-10',
                'end_date' => '2025-05-12',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'total_price' => 50000.00,
                'rental_status' => 'belum_dibayar',
                'start_date' => '2025-05-15',
                'end_date' => '2025-05-16',
                'created_at' => now(),
            ],
        ]);
    }
}
