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
                'name' => 'Tenda Double Layer 4 Orang',
                'description' => 'Tenda berkualitas tinggi untuk 4 orang, tahan air.',
                'price_per_day' => 50000.00,
                'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/108/MTA-173774493/no_brand_tenda_double_layer_4-5_orang_compass_camping_outdoor_waterproof_full02_mto4bya6.jpg',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Kompor Portable',
                'description' => 'Kompor Potable Merek Niko',
                'price_per_day' => 20000.00,
                'image_url' => 'https://image.utamamega.co.id/s3/productimages/webp/co4584/p51997/w600-h600/908f8cdd-c746-4b28-9d5d-daba3c7861ff.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
