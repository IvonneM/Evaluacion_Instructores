<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleAprendizRespuesta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Detalle_Aprediz_Respuesta', function(Blueprint $table)
		{
            $table->increments('id_Detalle_A_R');
			$table->integer('FK_Respuestas');
			$table->integer('FK_Detalle_E_I');
			$table->integer('FK_Aprendiz');
<<<<<<< HEAD
			/*

	}
=======
 /*
			$table->foreign('id_Detalle_A_R')
			->references('id_Respuesta')
			->on('Respuestas')
			->onDelete('cascade');
			
			$table->foreign('id_Detalle_A_R')
			->references('id_Ficha_Intructor')
			->on('Detalle_E_I')
			->onDelete('cascade');

			$table->foreign('id_Detalle_A_R')
			->references('id_A')
			->on('Aprendizs')
			->onDelete('cascade');
			*/
			});
		}

			/*

	
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

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
