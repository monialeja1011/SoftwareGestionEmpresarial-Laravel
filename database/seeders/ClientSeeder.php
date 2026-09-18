<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Laura Gómez',
                'phone' => '3001234567',
                'email' => 'laura@gmail.com',
                'address' => 'Cartago, Valle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos Rodríguez',
                'phone' => '3012345678',
                'email' => 'carlos@gmail.com',
                'address' => 'Cartago, Valle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'María López',
                'phone' => '3023456789',
                'email' => 'maria@gmail.com',
                'address' => 'Pereira, Risaralda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andrés Martínez',
                'phone' => '3034567890',
                'email' => 'andres@gmail.com',
                'address' => 'Armenia, Quindío',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sofía Ramírez',
                'phone' => '3045678901',
                'email' => 'sofia@gmail.com',
                'address' => 'Cartago, Valle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

