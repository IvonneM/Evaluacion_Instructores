<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Respuesta as Respuesta;
use Illuminate\Http\Request;

class RespuestasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$respuestas=Respuesta::all();
		return \View::make('listRespuesta', compact('respuestas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newRespuesta');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$respuestas = new Respuesta;
		$respuestas -> Tipo_Respuesta = $request -> Tipo_Respuesta;
		$respuestas-> save();
		return redirect('respuestas');

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
	public function edit($id_Respuestas)
	{
		$respuestas = Respuesta::find($id_Respuestas);
		return\View::make('updateRespuesta', compact('respuestas'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$respuestas = Respuesta::find($request->id_Respuestas);
		$respuestas -> Tipo_Respuesta = $request ->Tipo_Respuesta;
		$respuestas -> save();
		return redirect('respuestas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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


}
