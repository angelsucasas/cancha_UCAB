<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSinergiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sinergia', function(Blueprint $table)
		{
			$table->integer('cod_sin', true);
			$table->string('nombre_sin', 150);
			$table->string('descripcion_sin', 250);
			$table->integer('fk_ede')->nullable();
			$table->integer('fk_ude')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sinergia');
	}

}
