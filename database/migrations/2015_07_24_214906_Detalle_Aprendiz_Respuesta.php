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
