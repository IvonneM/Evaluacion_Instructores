<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Models\Ficha as Ficha;
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class FichaController extends Controller {

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
		$fichas=Ficha::all();
		return \View::make('listFicha', compact('fichas'));
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
		return \View::make('newFicha');
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
		
		$Ficha = new Ficha;
		$Ficha -> Nombre_P = $request -> Nombre_P;
		$Ficha -> Esyado_Ficha = $request -> Estado_Ficha;
		$Ficha -> Cod_Ficha = $request -> Cod_Ficha;
		$Ficha -> save();
		return redirect('Ficha');
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
	{
		//
=======
	public function show($id_Ficha)
	{
	
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
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
	public function edit($id_Ficha)
	{
		$Ficha = Ficha ::find($id_Ficha);
		return\View::make('updateFicha', compact('Ficha'));	
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
		$Ficha = Ficha::find($Request ->id_Ficha);
		$Ficha -> Nombre_P = $request -> Nombre_P;
		$Ficha -> Esyado_Ficha = $request -> Estado_Ficha;
		$Ficha -> Cod_Ficha = $request -> Cod_Ficha;
		$Ficha -> save();
		return redirect('Ficha');
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
	public function destroy($id_Ficha)
	{
		$Ficha=Ficha::find($id_Ficha);
		$Ficha->delete();
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
		$fichas = Ficha::where('Cod_Ficha','like','%'.$request->Cod_Ficha.'%')->get();
		return \View::make('listFicha', compact('fichas'));
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
