<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Regional as Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$regionals=Regional::all();
		return \View::make('listRegional', compact('regionals'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newRegional');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$regionals = new Regional;
		$regionals -> name = $request -> name;
		$regionals -> ubicacion = $request -> ubicacion;
		$regionals -> Estado_Regional = $request -> Estado_Regional;
		$regionals -> Cod_Regional = $request -> Cod_Regional;
		$regionals-> save();
		return redirect('regionals');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_R)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_R)
	{
		$regionals = Movie::find($id_R);
		return\View::make('updateRegional', compact('regionals'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$regionals = Regional::find($request->id_R);
		$regionals -> name = $request ->name;
		$regionals -> ubicacion = $request ->ubicacion;
		$regionals -> Estado_Regional = $request ->Estado_Regional;
		$regionals -> Cod_Regional = $request ->Cod_Regional;
		$regionals -> save();
		return redirect('regionals');
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_R)
	{
		$regionals=Regional::find($id_R);
		$regionals->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$regionals = Regional::where('name','like','%'.$request->name.'%')->get();
		return \View::make('listRegional', compact('regionals'));
	}

}
