<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePdiUdeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pdi_ude', function(Blueprint $table)
		{
			$table->integer('cod_pdi_ude', true);
			$table->integer('fk_pdi')->nullable();
			$table->integer('fk_ude')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pdi_ude');
	}

}
