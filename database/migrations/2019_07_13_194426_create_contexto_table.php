<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContextoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contexto', function(Blueprint $table)
		{
			$table->integer('cod_con', true);
			$table->string('nombre_con', 150);
			$table->string('descripcion_con', 250);
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
		Schema::drop('contexto');
	}

}
