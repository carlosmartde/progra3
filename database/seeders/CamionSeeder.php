<?php

namespace Database\Seeders;

use App\Models\Camion;
use App\Models\Marca;
use App\Models\Transporte;
use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    public function run()
    {
        // Aseguramos que existan marcas y transportes
        $marcas = Marca::all();
        $transportes = Transporte::all();
        
        // Si no hay datos, regresamos sin hacer nada
        if($marcas->isEmpty() || $transportes->isEmpty()) {
            return;
        }
        
        // Crear 20 camiones asociados a marcas y transportes existentes
        for ($i = 0; $i < 20; $i++) {
            Camion::factory()
                ->create([
                    'id_marca' => $marcas->random()->id_marca,
                    'id_transporte' => $transportes->random()->id_transporte,
                ]);
        }
    }
}