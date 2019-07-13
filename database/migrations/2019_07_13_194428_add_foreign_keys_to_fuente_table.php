<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fuente', function(Blueprint $table)
		{
			$table->foreign('fk_ins', 'fk_ins')->references('cod_ins')->on('instrumento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fuente', function(Blueprint $table)
		{
			$table->dropForeign('fk_ins');
		});
	}

}
