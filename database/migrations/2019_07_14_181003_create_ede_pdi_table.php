<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEdePdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ede_pdi', function(Blueprint $table)
		{
			$table->integer('cod_ede_pdi', true);
			$table->integer('fk_ede')->nullable();
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
		Schema::drop('ede_pdi');
	}

}
