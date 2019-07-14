<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoblacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poblacion', function(Blueprint $table)
		{
			$table->integer('cod_pob', true);
			$table->string('descripcion_pob', 250);
			$table->integer('fk_tdm')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('poblacion');
	}

}
