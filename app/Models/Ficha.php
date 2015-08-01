<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
 {

	protected $table = 'fichas';
	protected $guarder =['id_Ficha'];
	protected $fillame = ['Nombre_P','Estado_Ficha','Cod_Ficha']

}
