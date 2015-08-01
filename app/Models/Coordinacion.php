<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
 {

	protected $table = 'coordinacions';
	protected $guarder = ['id_Coo'];
	protected $fillable =['name','Descripcion','Estado_Coordinacion','Cod_Coordinacion'];

}
