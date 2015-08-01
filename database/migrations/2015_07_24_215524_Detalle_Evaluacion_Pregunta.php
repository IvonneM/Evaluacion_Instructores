<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleEvaluacionPregunta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Detalle_E_P', function(Blueprint $table)
		{
            $table->increments('id_Detalle_E_P');
			$table->integer('FK_Pregunta');
			$table->integer('FK_Evaluacion');
/*
			$table->foreign('Detalle_E_P')
			->references('id_Pregunta')
			->on('preguntas')
			->onDelete('cascade');
			
			$table->foreign('id_Detalle_E_P')
			->references('id_E')
			->on('Evaluacions')
			->onDelete('cascade');
*/
			});
			
			
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
