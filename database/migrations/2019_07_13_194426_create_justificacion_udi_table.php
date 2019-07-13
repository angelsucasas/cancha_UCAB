<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJustificacionUdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('justificacion_udi', function(Blueprint $table)
		{
			$table->integer('cod_jus_udi', true);
			$table->string('descripcion_jus');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('justificacion_udi');
	}

}
