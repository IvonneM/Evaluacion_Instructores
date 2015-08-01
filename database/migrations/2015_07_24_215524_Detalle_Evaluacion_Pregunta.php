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
            $table->increments('id_Detalle_R');
			$table->integer('FK_Pregunta');
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
