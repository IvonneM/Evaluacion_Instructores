<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model 
{

	protected $table = 'Trimestres';
	protected $guarder = ['id_T'];
	protected $Fillable =['Fecha_Apertura','Fecha_Cierre','Tipo_Trimestre','Estado_Trimestre'];

}
