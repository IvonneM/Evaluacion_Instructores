<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
 {

	protected $table = 'evaluacions';
	protected $guarder = ['id_E'];
	protected $fillable = [ 'Tipo_Evaluacion','Descripcion','Estado_Evaluacion','Cod_Evaluacion'];

}
