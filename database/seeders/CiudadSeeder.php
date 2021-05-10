<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $departamentos = [
                  'Amazonas' => [ 'El Encanto',],
                //   'La Chorrera','La Pedrera','La Victoria','Leticia','Mirití-Paraná','Puerto Alegría','Puerto Arica','Puerto Nariño','Puerto Santander','Tarapacá', ],
                  'Antioquia' => [ 'Bajo Cauca', 'Magdalena Medio', 'Nordeste Antioqueño', 'Norte Antioqueño', 'Occidente Antioqueño', 'Oriente Antioqueño', 'Suroeste Antioqueño', 'Urabá', 'Valle de Aburrá', ],
                  'Arauca' => [ 'Arauca', 'Arauquita', 'Cravo Norte', 'Fortul', 'Puerto Rondón', 'Saravena', 'Tame',  ],
                  'Archipiélago de San Andrés' => [ 'Providencia y Santa Catalina', 'San Andrés' ],
                  'Atlántico' => [ 'Baranoa', 'Barranquilla', 'Campo de la Cruz', 'Candelaria', 'Galapa', 'Juan de Acosta', 'Luruaco', 'Malambo', 'Manatí', 'Palmar de Varela', 'Piojó', 'Polonuevo', 'Ponedera', 'Puerto Colombia', 'Repelón', 'Sabanagrande', 'Sabanalarga', 'Santa Lucía', 'Santo Tomás', 'Soledad', 'Suán', 'Tubará', 'Usiacurí',  ],                  
                  'Bogotá D.C.' => [ 'Bogotá' ],
                  'Bolívar' => [ 'Achí', 'Altos del Rosario', 'Arenal del Sur', 'Arjona', 'Arroyohondo', 'Barranco de Loba', 'Calamar', 'Cantagallo', 'Cartagena de Indias', 'Cicuco', 'Clemencia', 'Córdoba', 'El Carmen', 'El Guamo', 'El Peñón', 'Hatillo de Loba', 'Magangué',  ],
                  'Boyacá' => [ 'Centro', 'Distrito Fronterizo', 'Gutiérrez', 'La Libertad', 'Lengupá', 'Márquez', 'Neira', 'Norte', 'Occidente', 'Oriente',  ],
                  'Caldas' => [ 'Alto Occidente', 'Alto Oriente', 'Bajo Occidente', 'Centrosur', 'Magdalena Caldense', 'Norte',  ],
                  'Caquetá' => [ 'Albania', 'Belén de los Andaquies', 'Cartagena del Chairá', 'Currillo', 'El Doncello', 'El Paujil', 'Florencia', 'La Montañita',  ],
                //   'Casanare' => [  ],
                //   'Cauca' => [  ],                  
                //   'Cesar' => [  ],
                //   'Chocó' => [  ],
                //   'Córdoba' => [  ],
                //   'Cundinamarca' => [  ],
                //   'Guainía' => [  ],
                //   'Guaviare' => [  ],
                //   'Huila' => [  ],                  
                //   'La Guajira' => [  ],
                //   'Magdalena' => [  ],
                //   'Meta' => [  ],
                //   'Nariño' => [  ],
                //   'Norte de Santander' => [  ],
                //   'Putumayo' => [  ],                  
                //   'Quindío' => [  ],
                //   'Risaralda' => [  ],
                //   'Santander' => [  ],
                //   'Sucre' => [  ],
                //   'Tolima' => [  ],
                //   'Valle del Cauca' => [  ],
                //   'Vaupés' => [  ],                  
                //   'Vichada' => [  ],                  
                ];

                

                foreach ($departamentos as $key => $depto) {

                   $idDep = \App\Models\Departamento::select('id')->where( 'departamento', $key )->get();

                //    dd( next($departamentos));
         

                    foreach ($depto as $value) {
                        \App\Models\Ciudad::create([
                            'ciudad'           => $value,
                            'departamento_id' => $idDep[0]->id,
                        ]);
                    }
                }

    }
}


