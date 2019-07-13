<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClaseDeEventoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clase_de_evento', function(Blueprint $table)
		{
			$table->foreign('fk_oe', 'fk_oe')->references('cod_oe')->on('objetivo_especifico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clase_de_evento', function(Blueprint $table)
		{
			$table->dropForeign('fk_oe');
		});
	}

}
