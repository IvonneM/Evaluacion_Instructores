<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Regional as Regional;
=======

>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
use Illuminate\Http\Request;

class RegionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
<<<<<<< HEAD
		$regionals=Regional::all();
		return \View::make('listRegional', compact('regionals'));
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
		return \View::make('newRegional');
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
		$regionals = new Regional;
		$regionals -> name = $request -> name;
		$regionals -> ubicacion = $request -> ubicacion;
		$regionals -> Estado_Regional = $request -> Estado_Regional;
		$regionals -> Cod_Regional = $request -> Cod_Regional;
		$regionals-> save();
		return redirect('regionals');

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
	public function show($id_R)
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
	public function edit($id_R)
	{
		$regionals = Movie::find($id_R);
		return\View::make('updateRegional', compact('regionals'));
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
		$regionals = Regional::find($request->id_R);
		$regionals -> name = $request ->name;
		$regionals -> ubicacion = $request ->ubicacion;
		$regionals -> Estado_Regional = $request ->Estado_Regional;
		$regionals -> Cod_Regional = $request ->Cod_Regional;
		$regionals -> save();
		return redirect('regionals');
		
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
=======
	public function destroy($id)
	{
		//
>>>>>>> 905d2ad6834da555492e0183e25c51bdd72e8244
	}

}
