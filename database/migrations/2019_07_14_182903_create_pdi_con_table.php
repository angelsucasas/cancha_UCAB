<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePdiConTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pdi_con', function(Blueprint $table)
		{
			$table->integer('cod_pdi_con', true);
			$table->integer('fk_pdi')->nullable();
			$table->integer('fk_con')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pdi_con');
	}

}
