<?php

class Categoria extends \Eloquent {
	protected $fillable = ["nombre_categoria"];

	public function Producto()
	{
		return $this->hasMany('Producto');
	}
}