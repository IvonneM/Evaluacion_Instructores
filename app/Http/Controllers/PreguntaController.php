<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Pregunta as Pregunta;

>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class PreguntaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
<<<<<<< HEAD
		//
=======
		$preguntas=Pregunta::all();
		return \View::make('listPregunta', compact('preguntas'));
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD
		//
=======
		return \View::make('newPregunta');
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function store()
	{
		//
=======
	public function store(Request $request)
	{
		$Pregunta = new Pregunta;
		$Pregunta -> Pregunta = $request -> Pregunta;
		$Pregunta -> Estado_Pregunta = $request -> Estado_Pregunta;
		$Pregunta -> save();
		return redirect('Pregunta');
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function show($id)
=======
	public function show($id_Pregunta)
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function edit($id)
	{
		//
=======
	public function edit($id_Pregunta)
	{
		$Pregunta = Pregunta ::find($id_Pregunta);
		return\View::make('updatePregunta', compact('Pregunta'));
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function update($id)
	{
		//
=======
	public function update(Request $request)
	{
		$Pregunta = Pregunta::find($request->id_Pregunta);
		$Pregunta -> Pregunta = $request ->Pregunta;
		$Pregunta -> Estado_Pregunta = $request ->Estado_Pregunta;
		$Pregunta -> save();
		return redirect('Pregunta');
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function destroy($id)
	{
		//
=======
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
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
