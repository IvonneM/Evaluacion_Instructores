<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model 
{
	protected $table = 'preguntas';
	protected $guarded = ['id_Pregunta'];
	protected $fillable = ['Pregunta','Estado_Pregunta'];

}
