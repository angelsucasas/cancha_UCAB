<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estadio', function(Blueprint $table)
		{
			$table->integer('cod_est', true);
			$table->string('descripcion_est', 150);
			$table->string('recorrido_est', 150);
			$table->integer('fk_oe')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estadio');
	}

}
