<<<<<<< HEAD

=======
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model 
{
<<<<<<< HEAD
	protected $table = 'Funcionario';
=======
	protected $table = 'funcionarios';
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	protected $guarded = ['id_F'];
	protected $fillable = ['nombre','Apellido','Telefono','Email','Cargo','Estado_Funcionario','Tipo_Documento','Cod_Identificacion_F'];
}
