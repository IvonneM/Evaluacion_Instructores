<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Trimestre as Trimestre;
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class TrimestreController extends Controller {

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
		$trimestres=Trimestre::all();
		return \View::make('listTrimestre', compact('trimestres'));
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
		return \View::make('newTrimestre');
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
		$Trimestre = new Trimestre;
		$Trimestre -> Fecha_Apertura = $request -> Fecha_Apertura;
		$Trimestre -> Fecha_Cierre = $request -> Fecha_Cierre;
		$Trimestre -> Tipo_Trimestre = $request -> Tipo_Trimestre;
		$Trimestre -> Estado_Trimestre = $request -> Estado_Trimestre;
		$Trimestre -> save();
		return redirect('Trimestre');
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
	public function show($id_T)
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
	public function edit($id_T)
	{
		$Trimestre = Trimestre ::find($id_T);
		return\View::make('updateTrimestre', compact('Trimestre'));
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
		$Trimestre = Trimestre::find($request->id_T);
		$Trimestre -> Fecha_Apertura = $request -> Fecha_Apertura;
		$Trimestre -> Fecha_Cierre = $request -> Fecha_Cierre;
		$Trimestre -> Tipo_Trimestre = $request -> Tipo_Trimestre;
		$Trimestre -> Estado_Trimestre = $request -> Estado_Trimestre;
		$Trimestre -> save();
		return redirect('Trimestre');
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


>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
}
