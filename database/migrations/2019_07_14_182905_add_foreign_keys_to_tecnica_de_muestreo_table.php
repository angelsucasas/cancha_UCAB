<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTecnicaDeMuestreoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tecnica_de_muestreo', function(Blueprint $table)
		{
			$table->foreign('fk_mue', 'fk_mue')->references('cod_mue')->on('muestra')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tecnica_de_muestreo', function(Blueprint $table)
		{
			$table->dropForeign('fk_mue');
		});
	}

}
