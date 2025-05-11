<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('reports')->insert([
            [
                'id' => 1,
                'item_id' => 1,
                'period' => '2025-05',
                'total_rentals' => 2,
                'total_days' => 3,
                'total_income' => 150000.00,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'item_id' => 2,
                'period' => '2025-05',
                'total_rentals' => 1,
                'total_days' => 2,
                'total_income' => 20000.00,
                'created_at' => now(),
            ],
        ]);
    }
}
