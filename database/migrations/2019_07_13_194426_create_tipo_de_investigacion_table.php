<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoDeInvestigacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_de_investigacion', function(Blueprint $table)
		{
			$table->integer('cod_tdi', true);
			$table->string('nombre_tdi', 75);
			$table->string('descripcion_tdi', 75);
			$table->integer('fk_pdi')->nullable();
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
		Schema::drop('tipo_de_investigacion');
	}

}
