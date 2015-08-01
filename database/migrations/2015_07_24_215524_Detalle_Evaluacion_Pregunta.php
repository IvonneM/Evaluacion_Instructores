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
<<<<<<< HEAD
            $table->increments('id_Detalle_R');
			$table->integer('FK_Pregunta');
			$table->integer('FK_Evaluacion');
=======
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
			
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
			
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
