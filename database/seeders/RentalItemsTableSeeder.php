<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rental_items')->insert([
            [
                'id' => 1,
                'rental_id' => 1,
                'item_id' => 1,
                'quantity' => 1,
                'price' => 100000.00,
            ],
            [
                'id' => 2,
                'rental_id' => 1,
                'item_id' => 2,
                'quantity' => 1,
                'price' => 20000.00,
            ],
            [
                'id' => 3,
                'rental_id' => 2,
                'item_id' => 1,
                'quantity' => 1,
                'price' => 50000.00,
            ],
        ]);
    }
}
