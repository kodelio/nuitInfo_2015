<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Liste;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class ListesController extends Controller {

	protected $rules = [
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		$listes = Liste::all();
		return view('listes.index', compact('listes' , 'userName', 'userId'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		return view('listes.create', compact('liste', 'userName', 'userId'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		$this->validate($request, $this->rules);

		$input = Input::all();
		$liste = Liste::create( $input );

		return Redirect::route('listes.index')->with('message_success', 'Liste ' .$liste->name. ' créée');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Liste $liste
	 * @return Response
	 */
	public function show(Liste $liste)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		return view('listes.edit', compact('liste', 'userName', 'userId'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Liste $liste
	 * @return Response
	 */
	public function edit(Liste $liste)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		return view('listes.edit', compact('liste', 'userName', 'userId'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Liste $liste
	 * @return Response
	 */
	public function update(Liste $liste, Request $request)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$liste->update($input);
		
		$liste->save();

		return Redirect::route('listes.index')->with('message_modif', 'Liste ' .$liste->name. ' mise à jour');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Liste $liste
	 * @return Response
	 */
	public function destroy(Liste $liste)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		$name_liste = $liste->name;
		$liste->delete();
		return Redirect::route('listes.index')->with('message_modif', 'Liste ' .$liste->name. ' supprimée');
	}
}
