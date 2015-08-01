<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Programa_F AS Programa_F;
=======
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class Programa_FController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
<<<<<<< HEAD
		$programa__fs=Programa_F::all();
		return \View::make('listPrograma_F', compact('programa__fs'));
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
		return\View::make('NwePrograma_F');
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
		
		$programa__fs = new Programa_F;
		$programa__fs -> name = $request -> name;
		$programa__fs -> Descripcion = $request -> Descripcion;
		$programa__fs -> Estado_Programa = $request -> Estado_Programa;
		$programa__fs -> Cod_Programa = $request -> Cod_Programa;
		$programa__fs-> save();
		return redirect('programa__fs');
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
	public function show($Id)
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
	public function edit($Id)
	{
		$programa__fs= Programa_F::find($Id);
		return\View::make('updatePrograma_F', compact('programa__fs'));
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
	public function update(Request $request)
	{
		$programa__fs = Programa_F::find($request->Id);
		$programa__fs -> name = $request ->name;
		$programa__fs -> description = $request ->description;
		$programa__fs -> Estado_Programa = $request ->Estado_Programa;
		$programa__fs -> Cod_Programa = $request ->Cod_Programa;
		$programa__fs -> save();
		return redirect('programa__fs');
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
	public function destroy($Id)
	{
		$programa__fs=Programa_F::find($Id);
		$programa__fs->delete();
		return redirect()->back();
		
	}

	public function search(Request $request)
	{
		$programa__fs = Programa_F::where('name','like','%'.$request->name.'%')->get();
		return \View::make('listPrograma_F', compact('programa__fs'));
=======
	public function destroy($id)
	{
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
