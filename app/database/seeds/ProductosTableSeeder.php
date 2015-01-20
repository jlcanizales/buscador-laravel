<?php
/**
 * Poblado de tabla Productos.
 */

class ProductosTableSeeder extends Seeder {
    public function run(){
        $nombre = ['Monica','Dana','Hollywood','California','Peninsula'];
        for ($i=0; $i<=200;$i++){
            $producto = new Producto;
            $aleatorio = array_rand($nombre,1);
            $producto->nombre = $nombre[$aleatorio];
            $marca = Marca::find(rand(1,3));
            $categoria = Categoria::find(rand(1,3));
            $producto->marca()->associate($marca);
            $producto->categoria()->associate($categoria);
            $producto->save();
        }
    }
}