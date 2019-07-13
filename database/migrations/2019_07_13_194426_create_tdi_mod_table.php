<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTdiModTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tdi_mod', function(Blueprint $table)
		{
			$table->integer('cod_tdi_tm', true);
			$table->integer('fk_tdi')->nullable();
			$table->integer('fk_mod')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tdi_mod');
	}

}
