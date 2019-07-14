<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnidadDeEstudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('unidad_de_estudio', function(Blueprint $table)
		{
			$table->foreign('fk_pob', 'fk_pob')->references('cod_pob')->on('poblacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_udi', 'fk_udi')->references('cod_udi')->on('unidad_de_informacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('unidad_de_estudio', function(Blueprint $table)
		{
			$table->dropForeign('fk_pob');
			$table->dropForeign('fk_udi');
		});
	}

}
