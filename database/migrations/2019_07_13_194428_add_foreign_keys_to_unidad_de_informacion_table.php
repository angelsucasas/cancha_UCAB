<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnidadDeInformacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('unidad_de_informacion', function(Blueprint $table)
		{
			$table->foreign('fk_ede', 'fk_ede')->references('cod_ede')->on('evento_de_estudio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_pdi', 'fk_pdi')->references('cod_pdi')->on('pregunta_de_investigacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_cat', 'fk_cat')->references('cod_cat')->on('categoria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_ref', 'fk_ref')->references('cod_ref_udi')->on('referencia_udi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_ubi', 'fk_ubi')->references('cod_ubi_udi')->on('ubicacion_udi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_jus', 'fk_jus')->references('cod_jus_udi')->on('justificacion_udi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('unidad_de_informacion', function(Blueprint $table)
		{
			$table->dropForeign('fk_ede');
			$table->dropForeign('fk_pdi');
			$table->dropForeign('fk_cat');
			$table->dropForeign('fk_ref');
			$table->dropForeign('fk_ubi');
			$table->dropForeign('fk_jus');
		});
	}

}
