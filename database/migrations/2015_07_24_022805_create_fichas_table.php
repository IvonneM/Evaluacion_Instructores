<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fichas', function(Blueprint $table)
		{
            $table->increments('id_Ficha');
			$table->string('Nombre_P');
			$table->enum('Estado_Ficha',['Activo','Inactivo','Bloqueado']);
			$table->integer('Cod_Ficha')->unsigned();
			/*
			$table->foreign('Cod_Ficha')
			->references('id_P_F')
			->on('Programa__Fs')
			->onDelete('cascade');
			
			$table->foreign('Cod_Ficha')
			->references('id_Coo')
			->on('Coordinacions')
			->onDelete('cascade');
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
		Schema::drop('fichas');
	}

}
