<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Centro_Formacion as Centro_Formacion;
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class Centor_FController extends Controller {

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
		$centro__formacions=Centro_Formacion::all();
		return \View::make('listCentro_F', compact('centro__formacions'));
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
		return \View::make('newCentro_F');
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
		$Centro_Formacion = new Centro_Formacion;
		$Centro_Formacion -> name = $request -> name;
		$Centro_Formacion -> Telefono = $request -> Telefono;
		$Centro_Formacion -> Direccion = $request -> Direccion;
		$Centro_Formacion -> Descripcion = $request -> Descripcion;
		$Centro_Formacion -> Estado_Centro = $request -> Estado_Centro;
		$Centro_Formacion -> Cod_Centro = $request -> Cod_Centro;
		$Centro_Formacion -> save();
		return redirect('Centro_Formacion');
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
	public function show($id_C_F)
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
	public function edit($id_C_F)
	{
		$Centro_Formacion = Centro_Formacion ::find($id_C_F);
		return\View::make('updateCentro_F', compact('Centro_Formacion'));
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
		$Centro_Formacion = Centro_Formacion::find($request->id_C_F);
		$Centro_Formacion -> name = $request -> name;
		$Centro_Formacion -> Telefono = $request -> Telefono;
		$Centro_Formacion -> Direccion = $request -> Direccion;
		$Centro_Formacion -> Descripcion = $request -> Descripcion;
		$Centro_Formacion -> Estado_Centro = $request -> Estado_Centro;
		$Centro_Formacion -> Cod_Centro = $request -> Cod_Centro;
		$Centro_Formacion -> save();
		return redirect('Centro_Formacion');
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
	public function destroy($id_C_F)
	{
		$Centro_Formacion=Centro_Formacion::find($id_C_F);
		$Centro_Formacion->delete();
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
		$centro__formacions = Centro_Formacion::where('name','like','%'.$request->name.'%')->get();
		return \View::make('listCentro_F', compact('centro__formacions'));
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
