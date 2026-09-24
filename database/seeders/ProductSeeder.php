<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Aceite 15W40', 'code' => 'REP-001', 'price' => 85000, 'stock' => 20, 'description' => 'Aceite para motor diésel', 'category_id' => 2],
            ['name' => 'Filtro de aceite', 'code' => 'REP-002', 'price' => 35000, 'stock' => 30, 'description' => 'Filtro para mantenimiento de vehículos', 'category_id' => 1],
            ['name' => 'Llanta 295/80 R22.5', 'code' => 'LLA-001', 'price' => 1250000, 'stock' => 12, 'description' => 'Llanta para vehículo de carga', 'category_id' => 3],
            ['name' => 'Gato hidráulico', 'code' => 'HER-001', 'price' => 450000, 'stock' => 8, 'description' => 'Gato hidráulico para mantenimiento', 'category_id' => 5],
            ['name' => 'Extintor vehicular', 'code' => 'SEG-001', 'price' => 95000, 'stock' => 15, 'description' => 'Extintor para vehículos', 'category_id' => 6],
            ['name' => 'Kit de limpieza', 'code' => 'LIM-001', 'price' => 65000, 'stock' => 25, 'description' => 'Kit para limpieza de vehículos', 'category_id' => 7],
            ['name' => 'Batería 12V', 'code' => 'REP-003', 'price' => 520000, 'stock' => 10, 'description' => 'Batería para vehículo', 'category_id' => 1],
            ['name' => 'Linterna recargable', 'code' => 'SEG-002', 'price' => 75000, 'stock' => 18, 'description' => 'Linterna para emergencias', 'category_id' => 6],
            ['name' => 'Juego de herramientas', 'code' => 'HER-002', 'price' => 280000, 'stock' => 7, 'description' => 'Juego de herramientas mecánicas', 'category_id' => 5],
            ['name' => 'Conos de seguridad', 'code' => 'SEG-003', 'price' => 25000, 'stock' => 40, 'description' => 'Conos para señalización vial', 'category_id' => 6],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}