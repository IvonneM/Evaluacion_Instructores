<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrimestresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trimestres', function(Blueprint $table)
		{
			$table->increments('id_T');
			$table->date('Fecha_Apertura');
			$table->date('Fecha_Cierre');
			$table->enum('Tipo_Trimestre',['Primer_Trimestre','Segundo_Trimestre','Tercer_Trimestre','Cuarto_Trimestre']);
			$table->enum('Estado_Trimestre',['Activo','Inactivo','Bloqueado']);
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
		Schema::drop('trimestres');
	}

}
