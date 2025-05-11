<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('items')->insert([
            [
                'id' => 1,
                'name' => 'Tenda 4 Orang',
                'description' => 'Tenda berkualitas tinggi untuk 4 orang, tahan air.',
                'price_per_day' => 50000.00,
                'image_url' => 'https://example.com/images/tenda.jpg',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Sleeping Bag',
                'description' => 'Sleeping bag hangat untuk suhu dingin.',
                'price_per_day' => 20000.00,
                'image_url' => 'https://example.com/images/sleeping_bag.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
