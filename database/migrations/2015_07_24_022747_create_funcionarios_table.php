<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
            $table->increments('id_F');
			$table->string('nombre');
			$table->string('Apellido');
			$table->integer('Telefono');
			$table->string('Email')->unique();
			$table->enum('Cargo',['Instructor','Evaluador','Administrador']);
			$table->enum('Estado_Funcionario',['Activo','Inactivo','Bloqueado']);
		    $table->enum('Tipo_Documento',['C.C','T.I','R.C','C.E','Nit']);
			$table->integer('Cod_Identificacion_F')->unsigned();
			
			$table->foreign('Cod_Identificacion_F')
			->references('id_Coo')
			->on('Coordinacions')
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
		Schema::drop('funcionarios');
	}

}
