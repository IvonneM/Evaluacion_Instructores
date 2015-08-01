<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Coordinacion as Coordinacion;
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class CoordinacionController extends Controller {

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
		$coordinacions=Coordinacion::all();
		return \View::make('listCoordinacion', compact('coordinacions'));
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
		return \View::make('newCoordinacion');
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
		$Coordinacion = new Coordinacion;
		$Coordinacion -> name = $request -> name;
		$Coordinacion -> Descripcion = $request -> Descripcion;
		$Coordinacion -> Estado_Coordinacion = $request -> Estado_Coordinacion;
		$Coordinacion -> Cod_Coordinacion = $request -> Cood_Coordinacion;
		$Coordinacion -> save();
		return redirect('Coordinacion');
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
	public function show($id_Coo)
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
	public function edit($id_Coo)
	{
		$Coordinacion = Coordinacion ::find($id_Coo);
		return\View::make('updateCoordinacion', compact('Coordinacion'));
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
		$Coordinacion = Coordinacion::find($request->id_Coo);
		$Coordinacion -> name = $request -> name;
		$Coordinacion -> Descripcion = $request -> Descripcion;
		$Coordinacion -> Estado_Coordinacion = $request -> Estado_Coordinacion;
		$Coordinacion -> Cod_Coordinacion = $request -> Cood_Coordinacion;
		$Coordinacion -> save();
		return redirect('Coordinacion');
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
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
