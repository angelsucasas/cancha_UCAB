<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPreguntaDeInvestigacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pregunta_de_investigacion', function(Blueprint $table)
		{
			$table->foreign('fk_inv', 'fk_inv')->references('cod_inv')->on('investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pregunta_de_investigacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_inv');
		});
	}

}
