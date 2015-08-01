<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aprendizs', function(Blueprint $table)
		{
			$table->increments('id_A');
			$table->string('nombre');
			$table->string('Apellido');
			$table->integer('Telefono');
			$table->string('Email')->unique();
			$table->enum('Estado_Aprendiz',['Activo','Inactivo','Bloqueado']);
		    $table->enum('Tipo_Documento',['C.C','T.I','R.C','C.E','Nit']);
			$table->integer('Cod_Identificacion_A')->unsigned();
			
			$table->foreign('Cod_Identificacion_A')
			->references('id_Ficha')
			->on('Fichas')
			->onDelete('cascade');
			
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
		Schema::drop('aprendizs');
	}

}
