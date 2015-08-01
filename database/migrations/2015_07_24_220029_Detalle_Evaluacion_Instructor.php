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
