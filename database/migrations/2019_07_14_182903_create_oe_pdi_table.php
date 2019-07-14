<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOePdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oe_pdi', function(Blueprint $table)
		{
			$table->integer('cod_oe_pdi', true);
			$table->integer('fk_oe')->nullable();
			$table->integer('fk_pdi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oe_pdi');
	}

}
