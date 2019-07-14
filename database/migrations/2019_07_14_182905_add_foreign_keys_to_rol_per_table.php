<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolPerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rol_per', function(Blueprint $table)
		{
			$table->foreign('fk_rol', 'fk_rol')->references('cod_rol')->on('rol')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_per', 'fk_per')->references('cod_per')->on('permiso')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rol_per', function(Blueprint $table)
		{
			$table->dropForeign('fk_rol');
			$table->dropForeign('fk_per');
		});
	}

}
