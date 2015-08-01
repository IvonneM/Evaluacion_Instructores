<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleDimension extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DetalleDimension1', function(Blueprint $table)
		{
            $table->increments('id_Dimension');
			$table->integer('FK_Pregunta');
			$table->integer('FK_Dimension');
<<<<<<< HEAD
=======
            /*
			$table->foreign('id_Dimension')
			->references('id_Pregunta')
			->on('preguntas')
			->onDelete('cascade');
			
			$table->foreign('id_Dimension')
			->references('id_D')
			->on('dimensions');

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
