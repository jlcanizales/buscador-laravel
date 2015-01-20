<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('MarcasTableSeeder');
		$this->call('CategoriasTableSeeder');
		$this->call('ProductosTableSeeder');
	}

}
