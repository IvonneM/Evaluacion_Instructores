<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Respuesta as Respuesta;
=======

>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
use Illuminate\Http\Request;

class RespuestasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
<<<<<<< HEAD
		$respuestas=Respuesta::all();
		return \View::make('listRespuesta', compact('respuestas'));
=======
		//
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
		return \View::make('newRespuesta');
=======
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
<<<<<<< HEAD
		$respuestas = new Respuesta;
		$respuestas -> Tipo_Respuesta = $request -> Tipo_Respuesta;
		$respuestas-> save();
		return redirect('respuestas');

=======
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
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
	public function edit($id_Respuestas)
	{
		$respuestas = Respuesta::find($id_Respuestas);
		return\View::make('updateRespuesta', compact('respuestas'));
=======
	public function edit($id)
	{
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function update(Request $request)
	{
		$respuestas = Respuesta::find($request->id_Respuestas);
		$respuestas -> Tipo_Respuesta = $request ->Tipo_Respuesta;
		$respuestas -> save();
		return redirect('respuestas');
=======
	public function update($id)
	{
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function destroy($id_Respuestas)
	{
		$$respuestas=Respuesta::find($id_Respuestas);
		$$respuestas->delete();
		return redirect()->back();
	}
		public function search(Request $request)
	{
		$respuestas = Respuesta::where('Tipo_Respuesta','like','%'.$request->Tipo_Respuesta.'%')->get();
		return \View::make('listRespuesta', compact('respuestas'));
	}


=======
	public function destroy($id)
	{
		//
	}

>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
}
