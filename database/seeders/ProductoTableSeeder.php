<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++){
            DB::table('producto')->insert([
                'nombre_producto'          => 'Producto Ejemplo',
                'descripcion_producto'     => 'Este es un producto de ejemplo para demostración',
                'precio_producto'          => 100.00,
                'precio_venta_producto'    => 150.00,
                'fecha_vencimiento_producto' => '2025-12-31',
                'created_at'               => now(),
                'updated_at'               => now(),
            ]);
        }
    }
}
