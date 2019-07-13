<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemporalidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temporalidad', function(Blueprint $table)
		{
			$table->integer('cod_tem', true);
			$table->string('fecha_tem', 150);
			$table->integer('fk_ede')->nullable();
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
		Schema::drop('temporalidad');
	}

}
