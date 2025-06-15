<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ItemsTableSeeder::class,
            // ItemsTableSeeder::class,
            // RentalsTableSeeder::class,
            // RentalItemsTableSeeder::class,
            // ReportsTableSeeder::class,
            // RentalsNotesTableSeeder::class,
        ]);
    }
}
