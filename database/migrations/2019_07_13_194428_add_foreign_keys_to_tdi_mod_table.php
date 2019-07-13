<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTdiModTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tdi_mod', function(Blueprint $table)
		{
			$table->foreign('fk_tdi', 'fk_tdi')->references('cod_tdi')->on('tipo_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_mod', 'fk_mod')->references('cod_mod')->on('modalidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tdi_mod', function(Blueprint $table)
		{
			$table->dropForeign('fk_tdi');
			$table->dropForeign('fk_mod');
		});
	}

}
