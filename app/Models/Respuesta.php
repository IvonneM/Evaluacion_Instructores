<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model 
{

	protected $table ='respuestas';
	protected $guarder = ['id_Respuesta'];
	protected $fillablle= ['Tipo_Respuesta'];

}
