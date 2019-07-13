<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEdePdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ede_pdi', function(Blueprint $table)
		{
			$table->foreign('fk_ede', 'fk_ede')->references('cod_ede')->on('evento_de_estudio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		Schema::table('ede_pdi', function(Blueprint $table)
		{
			$table->dropForeign('fk_ede');
			$table->dropForeign('fk_pdi');
		});
	}

}
