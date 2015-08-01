<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Aprendiz as Aprendiz;

use Illuminate\Http\Request;

class aprendizController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$aprendizs=Aprendiz::all();
		return \View::make('listAprendiz', compact('aprendizs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('newAprendiz');
	}
              
              }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$aprendizs = new Aprendiz;
		$aprendizs->create($Request->all());
		return('aprendizs');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_A)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_A)
	{
		$aprendizs = Aprendiz::find($id_A);
		return\View::make('update', compact('aprendizs'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Resquest  $request)
	{
		$aprendizs = Aprendiz::find($id_A);
		$aprendizs -> save();
		return redirect('aprendizs');

	}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$aprendizs=Aprendiz::find($id_A);
		$aprendizs->delete();
		return redirect()->back();
		
	}

	public function search(Request $request)
	{
		$aprendizs = Aprendiz::where('nombre','like','%'.$request->nombre.'%')->get();
		return \View::make('listAprendiz', compact('aprendizs'));
	}

}
