<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // El orden es importante debido a las relaciones
        $this->call([
            TransporteSeeder::class,
            MarcaSeeder::class,
            CamionSeeder::class,
        ]);
    }
}