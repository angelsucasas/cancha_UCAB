<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadDeEstudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidad_de_estudio', function(Blueprint $table)
		{
			$table->integer('cod_ude', true);
			$table->string('descripcion_ude', 250);
			$table->string('nombre_ude', 150);
			$table->integer('fk_pob')->nullable();
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
		Schema::drop('unidad_de_estudio');
	}

}
