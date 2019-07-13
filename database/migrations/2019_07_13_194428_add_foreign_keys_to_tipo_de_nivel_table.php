<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoDeNivelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_de_nivel', function(Blueprint $table)
		{
			$table->foreign('fk_tdi', 'fk_tdi')->references('cod_tdi')->on('tipo_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_ndi', 'fk_ndi')->references('cod_ndi')->on('nivel_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_de_nivel', function(Blueprint $table)
		{
			$table->dropForeign('fk_tdi');
			$table->dropForeign('fk_ndi');
		});
	}

}
