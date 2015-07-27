<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
 {
   
	protected $table ='regionals';
	protected $guarder = ['id_R'];
	protected $Fillable = ['name','ubicacion','Estado_Regional','Cod_Regional'];

}
