<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalsNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rentals_notes')->insert([
            [
                'rental_id' => 1,
                'notes' => 'Barang dalam kondisi baik saat pengembalian.',
                'created_at' => now(),
            ],
        ]);
    }
}
