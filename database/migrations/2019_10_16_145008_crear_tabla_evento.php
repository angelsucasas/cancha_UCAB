<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function(Blueprint $table)
		{
			$table->bigInteger('codigo_evento', true)->unsigned();
            $table->string('nombre', 100);
            $table->string('deporte', 100);
            $table->string('host', 100);
            $table->string('descripcion', 500);
            $table->boolean('abierto');
            $table->timestamps();
            $table->string('tipo_torneo', 50);
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evento');
    }
}
