<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Repuestos', 'description' => 'Repuestos para vehículos de transporte'],
            ['name' => 'Lubricantes', 'description' => 'Aceites y lubricantes para mantenimiento'],
            ['name' => 'Llantas', 'description' => 'Llantas para vehículos de la empresa'],
            ['name' => 'Accesorios', 'description' => 'Accesorios para vehículos'],
            ['name' => 'Herramientas', 'description' => 'Herramientas para mantenimiento'],
            ['name' => 'Seguridad', 'description' => 'Elementos de seguridad vial'],
            ['name' => 'Limpieza', 'description' => 'Productos para limpieza de vehículos'],
            ['name' => 'Combustibles', 'description' => 'Productos relacionados con combustible'],
            ['name' => 'Equipos', 'description' => 'Equipos utilizados en la operación'],
            ['name' => 'Papelería', 'description' => 'Elementos administrativos y de oficina'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
