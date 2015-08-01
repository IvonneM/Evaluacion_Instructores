<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pregunta as Pregunta;


use Illuminate\Http\Request;

class PreguntaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$preguntas=Pregunta::all();
		return \View::make('listPregunta', compact('preguntas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newPregunta');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$Pregunta = new Pregunta;
		$Pregunta -> Pregunta = $request -> Pregunta;
		$Pregunta -> Estado_Pregunta = $request -> Estado_Pregunta;
		$Pregunta -> save();
		return redirect('Pregunta');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_Pregunta)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_Pregunta)
	{
		$Pregunta = Pregunta ::find($id_Pregunta);
		return\View::make('updatePregunta', compact('Pregunta'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$Pregunta = Pregunta::find($request->id_Pregunta);
		$Pregunta -> Pregunta = $request ->Pregunta;
		$Pregunta -> Estado_Pregunta = $request ->Estado_Pregunta;
		$Pregunta -> save();
		return redirect('Pregunta');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_Pregunta)
	{
		$Pregunta=Pregunta::find($id_Pregunta);
		$Pregunta->delete();
		return redirect()->back();
	}
/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function search(Request $request)
	{
		$preguntas = Pregunta::where('Pregunta','like','%'.$request->Pregunta.'%')->get();
		return \View::make('listPregunta', compact('preguntas'));
	}

}
