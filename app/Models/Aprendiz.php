<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model 
{
	protected $table ='aprendizs';
	protected $guarder ='id_A';
	protected $fillable = ['nombre','Apellido','Telefono','Email','Estado_Aprendiz','Tipo_Documento','Cod_Identificacion_A'];

}
