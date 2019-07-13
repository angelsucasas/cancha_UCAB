<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetivoGeneralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objetivo_general', function(Blueprint $table)
		{
			$table->integer('cod_og', true);
			$table->string('descripcion_og', 300);
			$table->string('nivel_og', 150);
			$table->integer('fk_tdi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('objetivo_general');
	}

}
