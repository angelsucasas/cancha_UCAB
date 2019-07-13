<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContextoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contexto', function(Blueprint $table)
		{
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
		Schema::table('contexto', function(Blueprint $table)
		{
			$table->dropForeign('fk_udi');
		});
	}

}
