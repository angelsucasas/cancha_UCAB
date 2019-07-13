<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnteGubernamentalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ente_gubernamental', function(Blueprint $table)
		{
			$table->foreign('fk_usu', 'fk_usu')->references('cod_usu')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ente_gubernamental', function(Blueprint $table)
		{
			$table->dropForeign('fk_usu');
		});
	}

}
