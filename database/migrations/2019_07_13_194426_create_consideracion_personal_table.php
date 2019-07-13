<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsideracionPersonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consideracion_personal', function(Blueprint $table)
		{
			$table->integer('cod_cp', true);
			$table->string('relacion_tema_expectativa');
			$table->string('interes_del_investigador_cp');
			$table->string('estudios_previos_cp');
			$table->string('acceso_informacion_cp');
			$table->string('tiempo_recursos_cp');
			$table->string('asesoria_orientacion_cp');
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
		Schema::drop('consideracion_personal');
	}

}
