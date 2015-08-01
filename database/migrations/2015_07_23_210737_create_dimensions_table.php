<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimensions', function(Blueprint $table)
		{
			$table->increments('id_D');
			$table->enum('Tipo_Dimension',['Saber','Ser','Hacer']);
			$table->string('Descripcion')->nullable();
			$table->enum('Estado_Dimension',['Activo','Inactivo','Bloqueado']);
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
		Schema::drop('dimensions');
	}

}
