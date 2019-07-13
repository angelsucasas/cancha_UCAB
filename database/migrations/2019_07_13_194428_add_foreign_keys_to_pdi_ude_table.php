<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPdiUdeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pdi_ude', function(Blueprint $table)
		{
			$table->foreign('fk_pdi', 'fk_pdi')->references('cod_pdi')->on('pregunta_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_ude', 'fk_ude')->references('cod_ude')->on('unidad_de_estudio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pdi_ude', function(Blueprint $table)
		{
			$table->dropForeign('fk_pdi');
			$table->dropForeign('fk_ude');
		});
	}

}
