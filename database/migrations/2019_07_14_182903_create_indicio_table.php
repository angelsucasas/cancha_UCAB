<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndicioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('indicio', function(Blueprint $table)
		{
			$table->integer('cod_ind', true);
			$table->string('nombre_ind', 150);
			$table->string('descripcion_ind', 250);
			$table->integer('fk_sin')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('indicio');
	}

}
