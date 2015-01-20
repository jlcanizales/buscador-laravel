<?php

class HomeController extends BaseController {

	/**
	 * Muestra el formulario
	 * @return vista llamada formuarlio
	 */
	public function showForm()
	{
		return View::make('formulario');
	}

	/**
	 * Busca segun el texto puesto en el formulario
	 * @return Vista de respuesta con un Array del resultado de la búsqueda en la base de datos y un el texto que se buscó
	 */
	public function showResults()
	{
		$texto = Input::get('busqueda');
		$partes = explode(" ",$texto);
		$numero = count($partes);
		if($texto==""){
			$producto = Producto::join('categorias', 'categoria_id', '=', 'categorias.id')
				->join('marcas', 'marca_id', '=','marcas.id')
				->paginate(5);
		}
		else{
			switch ($numero) {
				case 1:
					$producto = Producto::join('categorias', 'categoria_id', '=', 'categorias.id')
						->join('marcas', 'marca_id', '=','marcas.id')
						->whereRaw("MATCH (nombre) AGAINST ('".$texto."' IN BOOLEAN MODE)or
									MATCH (nombre_categoria) AGAINST ('".$texto."' IN BOOLEAN MODE)or
									MATCH (nombre_marca) AGAINST ('".$texto."' IN BOOLEAN MODE)")
						->paginate(5);
					break;
				case 2:
					$producto = Producto::join('categorias', 'categoria_id', '=', 'categorias.id')
						->join('marcas', 'marca_id', '=','marcas.id')
						->whereRaw("(MATCH (nombre) AGAINST ('".$texto."' IN BOOLEAN MODE) and
									MATCH (nombre_categoria) AGAINST ('".$texto."' IN BOOLEAN MODE))
									or
									(MATCH (nombre) AGAINST ('".$texto."' IN BOOLEAN MODE) and
									MATCH (nombre_marca) AGAINST ('".$texto."' IN BOOLEAN MODE))
									or
									(MATCH (nombre_categoria) AGAINST ('".$texto."' IN BOOLEAN MODE) and
									MATCH (nombre_marca) AGAINST ('".$texto."' IN BOOLEAN MODE))")
						->paginate(5);
					break;
				case 3:
					$producto = Producto::join('categorias', 'categoria_id', '=', 'categorias.id')
						->join('marcas', 'marca_id', '=','marcas.id')
						->whereRaw("MATCH (nombre) AGAINST ('".$texto."' IN BOOLEAN MODE) and
									MATCH (nombre_categoria) AGAINST ('".$texto."' IN BOOLEAN MODE) and
									MATCH (nombre_marca) AGAINST ('".$texto."' IN BOOLEAN MODE)")
						->paginate(5);
					break;
				default:
					$producto = Producto::join('categorias', 'categoria_id', '=', 'categorias.id')
						->join('marcas', 'marca_id', '=','marcas.id')
						->whereRaw("MATCH (nombre) AGAINST ('".$texto." ' IN BOOLEAN MODE) or MATCH (nombre_categoria) AGAINST ('".$texto."' IN BOOLEAN MODE) or MATCH (nombre_marca) AGAINST ('".$texto."' IN BOOLEAN MODE)")
						->paginate(5);
			}
		}
		return View::make('resultados')->with('result',$producto)->with('busqueda',$texto);
	}
}
