<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParametroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parametro', function(Blueprint $table)
		{
			$table->foreign('fk_ind', 'fk_ind')->references('cod_ind')->on('indicio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parametro', function(Blueprint $table)
		{
			$table->dropForeign('fk_ind');
		});
	}

}
