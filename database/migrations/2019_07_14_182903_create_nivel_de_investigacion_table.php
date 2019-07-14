<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNivelDeInvestigacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nivel_de_investigacion', function(Blueprint $table)
		{
			$table->integer('cod_ndi', true);
			$table->string('descripcion_ndi', 75);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nivel_de_investigacion');
	}

}
