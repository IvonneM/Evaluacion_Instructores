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
