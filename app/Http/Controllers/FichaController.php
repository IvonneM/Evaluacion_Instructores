<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ficha as Ficha;

use Illuminate\Http\Request;

class FichaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fichas=Ficha::all();
		return \View::make('listFicha', compact('fichas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newFicha');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		$Ficha = new Ficha;
		$Ficha -> Nombre_P = $request -> Nombre_P;
		$Ficha -> Esyado_Ficha = $request -> Estado_Ficha;
		$Ficha -> Cod_Ficha = $request -> Cod_Ficha;
		$Ficha -> save();
		return redirect('Ficha');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_Ficha)
	{
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_Ficha)
	{
		$Ficha = Ficha ::find($id_Ficha);
		return\View::make('updateFicha', compact('Ficha'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$Ficha = Ficha::find($Request ->id_Ficha);
		$Ficha -> Nombre_P = $request -> Nombre_P;
		$Ficha -> Esyado_Ficha = $request -> Estado_Ficha;
		$Ficha -> Cod_Ficha = $request -> Cod_Ficha;
		$Ficha -> save();
		return redirect('Ficha');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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
	}

}
