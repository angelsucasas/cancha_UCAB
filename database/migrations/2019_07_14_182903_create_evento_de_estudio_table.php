<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventoDeEstudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evento_de_estudio', function(Blueprint $table)
		{
			$table->integer('cod_ede', true);
			$table->string('nombre_ede', 150);
			$table->string('descripcion_ede', 250);
			$table->integer('fk_ins')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evento_de_estudio');
	}

}
