<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluacions', function(Blueprint $table)
		{
	        $table->increments('id_E');
			$table->enum('Tipo_Evaluacion',['Inactivo_Tecnico','Instructor_Transversal','Instructor_General']);
			$table->string('Descripcion');
			$table->enum('Estado_Evaluacion',['Activo','Inactivo','Bloqueado']);
			$table->integer('Cod_Evaluacion')->unsigned();
			
			/*$table->foreign('Cod_Evaluacion')
			->references('id_F')
			->on('Funcionarios')
			->onDelete('cascade');
			
			$table->foreign('Cod_Evaluacion')
			->references('id_T')
			->on('Trimestres');
			*/
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
		Schema::drop('evaluacions');
	}

}
