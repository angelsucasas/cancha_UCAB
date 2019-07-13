<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoDeInvestigacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_de_investigacion', function(Blueprint $table)
		{
			$table->foreign('fk_pdi', 'fk_pdi')->references('cod_pdi')->on('pregunta_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_udi', 'fk_udi')->references('cod_udi')->on('unidad_de_informacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_de_investigacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_pdi');
			$table->dropForeign('fk_udi');
		});
	}

}
