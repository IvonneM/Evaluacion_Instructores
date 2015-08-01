<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Dimension as Dimension;

use Illuminate\Http\Request;

class DimensionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dimensions=Dimension::all();
		return \View::make('listDimension', compact('dimensions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newDimension');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$Dimension = new Dimension;
		$Dimension -> Tipo_Dimension = $request -> Tipo_Dimension;
		$Dimension -> Descripcion = $request -> Descripcion;
		$Dimension -> Estado_Dimension = $request -> Estado_Dimension;
		$Dimension -> save();
		return redirect('Dimension');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_D)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_D)
	{
		$Dimension = Dimension ::find($id_D);
		return\View::make('updateDimension', compact('Dimension'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$Dimension = Dimension::find($request->id_D);
		$Dimension -> Tipo_Dimension = $request ->Tipo_Dimension;
		$Dimension -> Descripcion = $request ->Descripcion;
		$Dimension -> Estado_Dimension = $request ->Estado_Dimension;
		$Dimension -> save();
		return redirect('Dimension');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_D)
	{
		$Dimension=Dimension::find($id_D);
		$Dimension->delete();
		return redirect()->back();
	}

	/**
	 * Serch the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function search(Request $request)
	{
		$dimensions = Dimension::where('Tipo_Dimension','like','%'.$request->Tipo_Dimension.'%')->get();
		return \View::make('listdimension', compact('dimensions'));
	}


}
