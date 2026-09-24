<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ClientSeeder::class,
            ProductSeeder::class,
            SaleSeeder::class,
            SaleDetailSeeder::class,
        ]);
    }
}
