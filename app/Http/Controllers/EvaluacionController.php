<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion as Evaluacion;

use Illuminate\Http\Request;

class EvaluacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$evaluacions=Evaluacion::all();
		return \View::make('listEvaluacion', compact('evaluacions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return\View::make('NewEvaluacion');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$evaluacions = new Evaluacion;
		$evaluacions -> Tipo_Evaluacion = $request -> Tipo_Evaluacion;
		$evaluacions -> Descripcion = $request -> Descripcion;
		$evaluacions -> Estado_Evaluacion = $request -> Estado_Evaluacion;
		$evaluacions -> Cod_Evaluacion = $request -> Cod_Evaluacion;
		$evaluacions-> save();
		return redirect('evaluacions');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_E)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_E)
	{
		$evaluacions = Evaluacion::find($id_E);
		return\View::make('updateEvaluacion', compact('evaluacions'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_E)
	{
		$evaluacions = Evaluacion::find($request->id_E);
		$evaluacions-> Tipo_Evaluacion = $request ->Tipo_Evaluacion;
		$evaluacions -> Description = $request ->Description;
		$evaluacions-> Estado_Evaluacion = $request ->Estado_Evaluacion;
		$evaluacions -> Cod_Evaluacion = $request ->Cod_Evaluacion;
		$evaluacions -> save();
		return redirect('evaluacions');
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_E)
	{
		$evaluacions=Evaluacion::find($id_E);
		$evaluacions->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$evaluacions = Evaluacion::where('Tipo_Evaluacion','like','%'.$request->Tipo_Evaluacion.'%')->get();
		return \View::make('listEvaluacion', compact('evaluacions'));
	}

}
