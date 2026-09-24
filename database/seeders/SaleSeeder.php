<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sales')->insert([
            [
                'client_id' => 1,
                'date' => '2026-09-01',
                'total' => 85000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 2,
                'date' => '2026-09-02',
                'total' => 35000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 3,
                'date' => '2026-09-03',
                'total' => 1250000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 4,
                'date' => '2026-09-04',
                'total' => 450000,
                'status' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 5,
                'date' => '2026-09-05',
                'total' => 95000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 6,
                'date' => '2026-09-06',
                'total' => 65000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 7,
                'date' => '2026-09-07',
                'total' => 520000,
                'status' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 8,
                'date' => '2026-09-08',
                'total' => 75000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 9,
                'date' => '2026-09-09',
                'total' => 280000,
                'status' => 'Completada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => 10,
                'date' => '2026-09-10',
                'total' => 25000,
                'status' => 'Pendiente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
