<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factibilidad', function(Blueprint $table)
		{
			$table->integer('cod_fac', true);
			$table->string('descripcion_fac', 75);
			$table->string('nivel_fac', 75);
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
		Schema::drop('factibilidad');
	}

}
