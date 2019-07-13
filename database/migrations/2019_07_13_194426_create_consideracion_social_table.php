<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsideracionSocialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consideracion_social', function(Blueprint $table)
		{
			$table->integer('cod_cs', true);
			$table->string('aporte_nuevos_conocimiento_cs');
			$table->string('aplicacion_area_cs');
			$table->string('responde_necesidad_cs');
			$table->string('impulsa_investigaciones_cs');
			$table->integer('fk_pdi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consideracion_social');
	}

}
