<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroFormacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centro__formacions', function(Blueprint $table)
		{
			$table->increments('id_C_F');
			$table->string('name');
			$table->string('Telefono')->nullable();
			$table->string('Direccion');
			$table->string('Descripcion');
			$table->enum('Estado_Centro_F',['Activo','Inactivo','Bloqueado']);
			$table->integer('Cod_Centro')->unsigned();
			
			$table->foreign('Cod_Centro')
			->references('id_R')
			->on('Regionals')
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
		Schema::drop('centro__formacions');
	}

}
