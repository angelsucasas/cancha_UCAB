<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoDeModalidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_de_modalidad', function(Blueprint $table)
		{
			$table->foreign('fk_mod', 'fk_mod')->references('cod_mod')->on('modalidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_de_modalidad', function(Blueprint $table)
		{
			$table->dropForeign('fk_mod');
		});
	}

}
