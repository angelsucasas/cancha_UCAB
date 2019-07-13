<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTecnicaDeMuestreoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tecnica_de_muestreo', function(Blueprint $table)
		{
			$table->integer('cod_tdm', true);
			$table->string('descripcion_tdm', 250);
			$table->integer('fk_mue')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tecnica_de_muestreo');
	}

}
