<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Trimestre as Trimestre;

use Illuminate\Http\Request;

class TrimestreController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$trimestres=Trimestre::all();
		return \View::make('listTrimestre', compact('trimestres'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newTrimestre');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$Trimestre = new Trimestre;
		$Trimestre -> Fecha_Apertura = $request -> Fecha_Apertura;
		$Trimestre -> Fecha_Cierre = $request -> Fecha_Cierre;
		$Trimestre -> Tipo_Trimestre = $request -> Tipo_Trimestre;
		$Trimestre -> Estado_Trimestre = $request -> Estado_Trimestre;
		$Trimestre -> save();
		return redirect('Trimestre');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_T)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_T)
	{
		$Trimestre = Trimestre ::find($id_T);
		return\View::make('updateTrimestre', compact('Trimestre'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$Trimestre = Trimestre::find($request->id_T);
		$Trimestre -> Fecha_Apertura = $request -> Fecha_Apertura;
		$Trimestre -> Fecha_Cierre = $request -> Fecha_Cierre;
		$Trimestre -> Tipo_Trimestre = $request -> Tipo_Trimestre;
		$Trimestre -> Estado_Trimestre = $request -> Estado_Trimestre;
		$Trimestre -> save();
		return redirect('Trimestre');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_T)
	{
		$Trimestre=Trimestre::find($id_T);
		$Trimestre->delete();
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
		$trimestres = Trimestre::where('Tipo_Trimestre','like','%'.$request->Tipo_Trimestre.'%')->get();
		return \View::make('listTrimestre', compact('trimestres'));
	}


}
