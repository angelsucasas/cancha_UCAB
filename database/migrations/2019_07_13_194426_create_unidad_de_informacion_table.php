<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadDeInformacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidad_de_informacion', function(Blueprint $table)
		{
			$table->integer('cod_udi', true);
			$table->text('cita_udi');
			$table->integer('fk_ede')->nullable();
			$table->integer('fk_pdi')->nullable();
			$table->integer('fk_cat')->nullable();
			$table->integer('fk_ref')->nullable();
			$table->integer('fk_ubi')->nullable();
			$table->integer('fk_jus')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidad_de_informacion');
	}

}
