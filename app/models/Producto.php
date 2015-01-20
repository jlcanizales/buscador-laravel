<?php

class Producto extends \Eloquent {
	protected $fillable = ["nombre"];

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}
	public function marca()
	{
		return $this->belongsTo('Marca');
	}
}