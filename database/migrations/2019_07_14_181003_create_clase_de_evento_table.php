<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClaseDeEventoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clase_de_evento', function(Blueprint $table)
		{
			$table->integer('cod_cde', true);
			$table->string('nombre_cde', 150);
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
		Schema::drop('clase_de_evento');
	}

}
