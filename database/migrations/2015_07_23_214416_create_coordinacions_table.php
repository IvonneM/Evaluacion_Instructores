<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coordinacions', function(Blueprint $table)
		{
			$table->increments('id_Coo');
			$table->string('name');
			$table->string('Descripcion');
			$table->enum('Estado_Coordinacion',['Activo','Inactivo','Bloqueado']);
			$table->integer('Cod_Coordinacion')->unsigned();
			
			$table->foreign('Cod_Coordinacion')
			->references('id_C_F')
			->on('centro__formacions')
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
		Schema::drop('coordinacions');
	}

}
