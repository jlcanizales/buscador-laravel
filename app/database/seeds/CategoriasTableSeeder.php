<?php
/**
 * Poblado de tabla Categorias.
 */
class CategoriasTableSeeder extends Seeder {
    public function run(){
        $categoria = new Categoria;
        $categoria->nombre_categoria = 'Camiseta';
        $categoria->save();

        $categoria1 = new Categoria;
        $categoria1->nombre_categoria = 'Jean';
        $categoria1->save();

        $categoria2 = new Categoria;
        $categoria2->nombre_categoria = 'Zapato';
        $categoria2->save();
    }
}
?>