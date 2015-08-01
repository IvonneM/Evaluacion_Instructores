<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleEvaluacionInstructor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Detalle_E_I', function(Blueprint $table)
		{
            $table->increments('id_Ficha_Intructor');
			$table->integer('FK_Funcionario');
			$table->integer('FK_Ficha');
			$table->integer('FK_Evaluacion');
<<<<<<< HEAD
=======
/*
			$table->foreign('id_Ficha_Intructor')
			->references('id_F')
			->on('Funcionario')
			->onDelete('cascade');
			
			$table->foreign('id_Ficha_Intructor')
			->references('id_Ficha')
			->on('Ficha')
			->onDelete('cascade');

			$table->foreign('id_Ficha_Intructor')
			->references('id_E')
			->on('Evaluacion')
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
