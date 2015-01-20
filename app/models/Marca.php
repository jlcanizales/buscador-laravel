<?php

class Marca extends \Eloquent {
	protected $fillable = ["nombre_marca"];

	public function Producto()
	{

		return $this->hasMany('Producto');
	}
}