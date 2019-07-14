<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnteGubernamentalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ente_gubernamental', function(Blueprint $table)
		{
			$table->integer('cod_eg', true);
			$table->string('descripcion_eg', 250)->nullable();
			$table->integer('fk_use')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ente_gubernamental');
	}

}
