<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Coordinacion as Coordinacion;

use Illuminate\Http\Request;

class CoordinacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$coordinacions=Coordinacion::all();
		return \View::make('listCoordinacion', compact('coordinacions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newCoordinacion');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$Coordinacion = new Coordinacion;
		$Coordinacion -> name = $request -> name;
		$Coordinacion -> Descripcion = $request -> Descripcion;
		$Coordinacion -> Estado_Coordinacion = $request -> Estado_Coordinacion;
		$Coordinacion -> Cod_Coordinacion = $request -> Cood_Coordinacion;
		$Coordinacion -> save();
		return redirect('Coordinacion');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_Coo)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_Coo)
	{
		$Coordinacion = Coordinacion ::find($id_Coo);
		return\View::make('updateCoordinacion', compact('Coordinacion'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$Coordinacion = Coordinacion::find($request->id_Coo);
		$Coordinacion -> name = $request -> name;
		$Coordinacion -> Descripcion = $request -> Descripcion;
		$Coordinacion -> Estado_Coordinacion = $request -> Estado_Coordinacion;
		$Coordinacion -> Cod_Coordinacion = $request -> Cood_Coordinacion;
		$Coordinacion -> save();
		return redirect('Coordinacion');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_Coo)
	{ 
		$Coordinacion=Coordinacion::find($id_Coo);
		$Coordinacion->delete();
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
		$coordinacions = Coordinacion::where('name','like','%'.$request->name.'%')->get();
		return \View::make('list', compact('coordinacions'));
	}

}
