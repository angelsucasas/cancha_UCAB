<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreguntaDeInvestigacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pregunta_de_investigacion', function(Blueprint $table)
		{
			$table->integer('cod_pdi', true);
			$table->string('pregunta_pdi', 250)->nullable();
			$table->integer('fk_inv')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pregunta_de_investigacion');
	}

}
