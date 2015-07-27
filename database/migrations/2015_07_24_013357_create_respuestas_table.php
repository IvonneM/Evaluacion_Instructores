<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas', function(Blueprint $table)
		{
            $table->increments('id_Respuesta');
			$table->enum('Tipo_Respuesta',['Siempre','Algunas_Veces','Nunca']);

			
			$table->foreign('id_Respuesta')
			->references('id_Pregunta')
			->on('Preguntas')
			->onDelete('cascade');
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('respuestas');
	}

}
