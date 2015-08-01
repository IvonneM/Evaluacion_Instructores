<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regionals', function(Blueprint $table)
		{
			$table->increments('id_R');
			$table->string('name');
			$table->string('ubicacion')->nullable();
			$table->enum('Estado_Regional',['Activo','Inactivo','Bloqueado']);
			$table->integer('Cod_Regional')->unsigned();
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
		Schema::drop('regionals');
	}

}
