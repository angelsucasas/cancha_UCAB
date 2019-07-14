<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndicioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('indicio', function(Blueprint $table)
		{
			$table->foreign('fk_sin', 'fk_sin')->references('cod_sin')->on('sinergia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('indicio', function(Blueprint $table)
		{
			$table->dropForeign('fk_sin');
		});
	}

}
