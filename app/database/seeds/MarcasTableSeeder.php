<?php
/**
 * Poblado de tabla Marcas.
 */

class MarcasTableSeeder extends Seeder {
    public function run(){
        $marca = new Marca;
        $marca->nombre_marca = 'Polo';
        $marca->save();

        $marca1 = new Marca;
        $marca1->nombre_marca = 'Abercrombie';
        $marca1->save();

        $marca2 = new Marca;
        $marca2->nombre_marca = 'Hollister';
        $marca2->save();
    }
}
?>