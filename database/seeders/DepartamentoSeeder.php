<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depts = [
                  'Amazonas', 'Antioquia', 'Arauca', 'Archipiélago de San Andrés', 'Atlántico', 
                  'Bogotá D.C.', 'Bolívar', 'Boyacá', 'Caldas', 'Caquetá', 
                //   'Casanare', 'Cauca', 
                //   'Cesar', 'Chocó', 'Córdoba', 'Cundinamarca', 'Guainía', 'Guaviare', 'Huila', 
                //   'La Guajira', 'Magdalena', 'Meta', 'Nariño', 'Norte de Santander', 'Putumayo', 
                //   'Quindío', 'Risaralda', 'Santander', 'Sucre', 'Tolima', 'Valle del Cauca', 'Vaupés', 
                //   'Vichada', 
                ];
 

        foreach ($depts as $dep) {

            \App\Models\Departamento::create([
            'departamento' => $dep
            ]);
        }


    }
}

