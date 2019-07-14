<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSinergiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sinergia', function(Blueprint $table)
		{
			$table->foreign('fk_ede', 'fk_ede')->references('cod_ede')->on('evento_de_estudio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sinergia', function(Blueprint $table)
		{
			$table->dropForeign('fk_ede');
		});
	}

}
