<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetivoEspecificoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objetivo_especifico', function(Blueprint $table)
		{
			$table->integer('cod_oe', true);
			$table->string('descripcion_oe', 500);
			$table->integer('fk_og')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('objetivo_especifico');
	}

}
