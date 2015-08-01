<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Dimension as Dimension;
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class DimensionController extends Controller {

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
		$dimensions=Dimension::all();
		return \View::make('listDimension', compact('dimensions'));
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
		return \View::make('newDimension');
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
		$Dimension = new Dimension;
		$Dimension -> Tipo_Dimension = $request -> Tipo_Dimension;
		$Dimension -> Descripcion = $request -> Descripcion;
		$Dimension -> Estado_Dimension = $request -> Estado_Dimension;
		$Dimension -> save();
		return redirect('Dimension');
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
	public function show($id_D)
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
	public function edit($id_D)
	{
		$Dimension = Dimension ::find($id_D);
		return\View::make('updateDimension', compact('Dimension'));
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
		$Dimension = Dimension::find($request->id_D);
		$Dimension -> Tipo_Dimension = $request ->Tipo_Dimension;
		$Dimension -> Descripcion = $request ->Descripcion;
		$Dimension -> Estado_Dimension = $request ->Estado_Dimension;
		$Dimension -> save();
		return redirect('Dimension');
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
	}

=======
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


>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
}
