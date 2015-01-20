<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('categoria_id')->unsigned();
			$table->integer('marca_id')->unsigned();

			$table->foreign('marca_id')->references('id')->on('marcas');
			$table->foreign('categoria_id')->references('id')->on('categorias');

			$table->timestamps();
		});
		DB::statement('ALTER TABLE productos ADD FULLTEXT buscarproductos(nombre)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
