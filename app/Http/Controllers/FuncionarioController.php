<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Funcionario as Funcionario;

use Illuminate\Http\Request;

class FuncionarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$funcionarios=Funcionario::all();
		return \View::make('listFuncionario', compact('funcionarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newFuncionario');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$Funcionario = new Funcionario;
		$Funcionario -> nombre = $request -> nombre;
		$Funcionario -> Apellido = $request -> Apellido;
		$Funcionario -> Telefono = $request -> Telefono;
		$Funcionario -> Email = $request -> Email;
		$Funcionario -> Cargo = $request -> Cargo;
		$Funcionario -> Estado_Funcionario = $request -> Estado_Funcionario;
		$Funcionario -> Tipo_Documento = $request -> Tipo_Documento;
		$Funcionario -> Cod_Identificacion_F = $request -> Cod_Identificacion_F;
		$Funcionario -> save();
		return redirect('Funcionario');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_F)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_F)
	{
		$Funcionario = Funcionario ::find($id_F);
		return\View::make('updateFuncionario', compact('Funcionario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$Funcionario = Funcionario::find($request->id_F);
		$Funcionario -> nombre = $request -> nombre;
		$Funcionario -> Apellido = $request -> Apellido;
		$Funcionario -> Telefono = $request -> Telefono;
		$Funcionario -> Email = $request -> Email;
		$Funcionario -> Cargo = $request -> Cargo;
		$Funcionario -> Estado_Funcionario = $request -> Estado_Funcionario;
		$Funcionario -> Tipo_Documento = $request -> Tipo_Documento;
		$Funcionario -> Cod_Identificacion_F = $request -> Cod_Identificacion_F;
		$Funcionario -> save();
		return redirect('Funcionario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_F)
	{
		$Funcionario=Funcionario::find($id_F);
		$Funcionario->delete();
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
		$funcionarios = Funcionario::where('Cod_Identificacion_F','like','%'.$request->Cod_Identificacion_F.'%')->get();
		return \View::make('listFuncionario', compact('funcionarios'));
	}


}
