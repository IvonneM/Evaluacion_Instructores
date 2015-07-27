<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa_F extends Model 
{
	protected $table ='programa__fs';
	protected $guarder = ['Id'];
	protected $fillable = ['nane','descripcion','Estado_Progrma','Cod_Programa'];

}
