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
            [
                'name' => 'Juan Pérez',
                'phone' => '3056789012',
                'email' => 'juan@gmail.com',
                'address' => 'Manizales, Caldas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Valentina Torres',
                'phone' => '3067890123',
                'email' => 'valentina@gmail.com',
                'address' => 'Cali, Valle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daniel Hernández',
                'phone' => '3078901234',
                'email' => 'daniel@gmail.com',
                'address' => 'Pereira, Risaralda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camila Vargas',
                'phone' => '3089012345',
                'email' => 'camila@gmail.com',
                'address' => 'Cartago, Valle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sebastián Castro',
                'phone' => '3090123456',
                'email' => 'sebastian@gmail.com',
                'address' => 'Armenia, Quindío',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}