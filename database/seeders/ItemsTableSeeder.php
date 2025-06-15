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
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fec-mall.akulaku.com%2Fmobile%2Fproduct%2Fdetail%3FspuId%3D318117139%26skuId%3D1072765410&psig=AOvVaw386sZgvFptBT5zQkv4J8HK&ust=1750045563247000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPjOh_LB8o0DFQAAAAAdAAAAABAd',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Kompor Portable',
                'description' => 'Kompor Potable Merek Niko',
                'price_per_day' => 20000.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ruparupa.com%2Fp%2Fkris-kompor-gas-portable-dengan-case-hitam.html&psig=AOvVaw3-vlFXx79XQID7Zn-vYPpM&ust=1750046010563000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCIChyMTD8o0DFQAAAAAdAAAAABAE',
                'created_at' => now(),
            ],
        ]);
    }
}
