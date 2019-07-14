<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPoblacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('poblacion', function(Blueprint $table)
		{
			$table->foreign('fk_tdm', 'fk_tdm')->references('cod_tdm')->on('tecnica_de_muestreo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('poblacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_tdm');
		});
	}

}
