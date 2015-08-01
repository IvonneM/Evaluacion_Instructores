<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro_Formacion extends Model
 {
 	protected $table ='centro__formacions';
	protected $guarder ='id_C_F';
	protected $fillable = ['name','Telefono','Direccion','Descripcion','Estado_Centro','Cod_Centro'];


	

}
