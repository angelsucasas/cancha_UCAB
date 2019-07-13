<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventoDeEstudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evento_de_estudio', function(Blueprint $table)
		{
			$table->foreign('fk_ins', 'fk_ins')->references('cod_ins')->on('instrumento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		Schema::table('evento_de_estudio', function(Blueprint $table)
		{
			$table->dropForeign('fk_ins');
			$table->dropForeign('fk_udi');
		});
	}

}
