<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaFsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programa__fs', function(Blueprint $table)
		{
			$table->increments('id_P_F');
			$table->string('name');
			$table->string('description')->nullable();
			$table->enum('Estado_Programa',['Activo','Inactivo','Bloqueado']);
			$table->integer('Cod_Programa')->unsigned();
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
		Schema::drop('programa__fs');
	}

}
