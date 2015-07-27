<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
 {

	protected $table = 'dimensions';
	protected $guarder = ['id_D'];
	protected $fillable = ['Tipo_Dimension','Descripcion','Estado_Dimension'];

}
