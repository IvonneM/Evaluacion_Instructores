<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Evaluacion as Evaluacion;
=======
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class EvaluacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
<<<<<<< HEAD
		$evaluacions=Evaluacion::all();
		return \View::make('listEvaluacion', compact('evaluacions'));
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
		return\View::make('NewEvaluacion');
=======
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
<<<<<<< HEAD
	public function store(Request $request)
	{
		$evaluacions = new Evaluacion;
		$evaluacions -> Tipo_Evaluacion = $request -> Tipo_Evaluacion;
		$evaluacions -> Descripcion = $request -> Descripcion;
		$evaluacions -> Estado_Evaluacion = $request -> Estado_Evaluacion;
		$evaluacions -> Cod_Evaluacion = $request -> Cod_Evaluacion;
		$evaluacions-> save();
		return redirect('evaluacions');
=======
	public function store()
	{
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function show($id_E)
=======
	public function show($id)
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
	public function edit($id_E)
	{
		$evaluacions = Evaluacion::find($id_E);
		return\View::make('updateEvaluacion', compact('evaluacions'));
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
	public function update($id_E)
	{
		$evaluacions = Evaluacion::find($request->id_E);
		$evaluacions-> Tipo_Evaluacion = $request ->Tipo_Evaluacion;
		$evaluacions -> Description = $request ->Description;
		$evaluacions-> Estado_Evaluacion = $request ->Estado_Evaluacion;
		$evaluacions -> Cod_Evaluacion = $request ->Cod_Evaluacion;
		$evaluacions -> save();
		return redirect('evaluacions');
		
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
=======
	public function destroy($id)
	{
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
