<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTemporalidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('temporalidad', function(Blueprint $table)
		{
			$table->foreign('fk_ede', 'fk_ede')->references('cod_ede')->on('evento_de_estudio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		Schema::table('temporalidad', function(Blueprint $table)
		{
			$table->dropForeign('fk_ede');
			$table->dropForeign('fk_udi');
		});
	}

}
