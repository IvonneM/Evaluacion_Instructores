<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Aprendiz as Aprendiz;
=======
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244

use Illuminate\Http\Request;

class aprendizController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
<<<<<<< HEAD
		$aprendizs=Aprendiz::all();
		return \View::make('listAprendiz', compact('aprendizs'));
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
		return \View::make('newAprendiz');
	}
              
              }
=======
		//
	}

>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
<<<<<<< HEAD
		$aprendizs = new Aprendiz;
		$aprendizs->create($Request->all());
		return('aprendizs');
=======
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
	public function show($id_A)
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
	public function edit($id_A)
	{
		$aprendizs = Aprendiz::find($id_A);
		return\View::make('update', compact('aprendizs'));
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
	public function update(Resquest  $request)
	{
		$aprendizs = Aprendiz::find($id_A);
		$aprendizs -> save();
		return redirect('aprendizs');

	}

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
	public function destroy($id)
	{
<<<<<<< HEAD
		$aprendizs=Aprendiz::find($id_A);
		$aprendizs->delete();
		return redirect()->back();
		
	}

	public function search(Request $request)
	{
		$aprendizs = Aprendiz::where('nombre','like','%'.$request->nombre.'%')->get();
		return \View::make('listAprendiz', compact('aprendizs'));
=======
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
