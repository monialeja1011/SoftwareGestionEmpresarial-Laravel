<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sale_details')->insert([
            [
                'sale_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'unit_price' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 35000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 3,
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => 1250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 4,
                'product_id' => 4,
                'quantity' => 1,
                'unit_price' => 450000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 5,
                'product_id' => 5,
                'quantity' => 1,
                'unit_price' => 95000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 6,
                'product_id' => 6,
                'quantity' => 1,
                'unit_price' => 65000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 7,
                'product_id' => 7,
                'quantity' => 1,
                'unit_price' => 520000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 8,
                'product_id' => 8,
                'quantity' => 1,
                'unit_price' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 9,
                'product_id' => 9,
                'quantity' => 1,
                'unit_price' => 280000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 10,
                'product_id' => 10,
                'quantity' => 1,
                'unit_price' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
