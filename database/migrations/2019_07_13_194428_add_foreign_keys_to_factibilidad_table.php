<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFactibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('factibilidad', function(Blueprint $table)
		{
			$table->foreign('fk_pdi', 'fk_pdi')->references('cod_pdi')->on('pregunta_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('factibilidad', function(Blueprint $table)
		{
			$table->dropForeign('fk_pdi');
		});
	}

}
