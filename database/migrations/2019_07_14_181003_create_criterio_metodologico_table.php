<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCriterioMetodologicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('criterio_metodologico', function(Blueprint $table)
		{
			$table->integer('cod_cm', true);
			$table->string('descripcion_cm', 500);
			$table->string('estudio_previo_cm', 500);
			$table->string('abordaje_cm', 500);
			$table->string('poblacion_accesible_cm', 500);
			$table->integer('fk_pdi')->nullable();
			$table->integer('fk_udi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('criterio_metodologico');
	}

}
