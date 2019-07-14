<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObjetivoGeneralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('objetivo_general', function(Blueprint $table)
		{
			$table->foreign('fk_tdi', 'fk_tdi')->references('cod_tdi')->on('tipo_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('objetivo_general', function(Blueprint $table)
		{
			$table->dropForeign('fk_tdi');
		});
	}

}