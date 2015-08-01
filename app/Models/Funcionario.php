
<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model 
{
	protected $table = 'Funcionario';
	protected $guarded = ['id_F'];
	protected $fillable = ['nombre','Apellido','Telefono','Email','Cargo','Estado_Funcionario','Tipo_Documento','Cod_Identificacion_F'];
}
