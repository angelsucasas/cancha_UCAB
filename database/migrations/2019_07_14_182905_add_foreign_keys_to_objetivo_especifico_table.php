<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObjetivoEspecificoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('objetivo_especifico', function(Blueprint $table)
		{
			$table->foreign('fk_og', 'fk_og')->references('cod_og')->on('objetivo_general')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('objetivo_especifico', function(Blueprint $table)
		{
			$table->dropForeign('fk_og');
		});
	}

}
