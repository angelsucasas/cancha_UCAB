<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOePdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('oe_pdi', function(Blueprint $table)
		{
			$table->foreign('fk_oe', 'fk_oe')->references('cod_oe')->on('objetivo_especifico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		Schema::table('oe_pdi', function(Blueprint $table)
		{
			$table->dropForeign('fk_oe');
			$table->dropForeign('fk_pdi');
		});
	}

}
