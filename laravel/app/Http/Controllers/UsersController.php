<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\User;
use App\Liste;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class UsersController extends Controller {

	protected $rules = [
	'name' => ['required'],
	'email' => ['required'],
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
		if(Auth::user()->admin == '1')
		{	
			$users = User::all();
			return view('users.index', compact('users' , 'userName', 'userId'));
		}
		return Redirect::route('listes.index')->with('userName', 'userId')->with('message_delete', 'Vous n\'êtes pas admin');	
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
		if(Auth::user()->admin == '1')
		{
			return view('users.create', compact('user', 'userName', 'userId'));
		}
		return Redirect::route('listes.index')->with('userName', 'userId')->with('message_delete', 'Vous n\'êtes pas admin');	
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
		if(Auth::user()->admin == '1')
		{
			$this->validate($request, $this->rules);

			$user = User::create([
				'name' => $request['name'],
				'email' => $request['email'],
				'password' => bcrypt($request['password']),
				'admin' => $request['admin'],
				]);

			return Redirect::route('users.index')->with('message_success', 'Utilisateur ' .$user->name. ' créé');
		}
		return Redirect::route('listes.index')->with('userName', 'userId')->with('message_delete', 'Vous n\'êtes pas admin');	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  User $user
	 * @return Response
	 */
	public function show(User $user)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		return view('users.show', compact('user', 'userName', 'userId'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  User $user
	 * @return Response
	 */
	public function edit(User $user)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		if(Auth::user()->admin == '1')
		{
			return view('users.edit', compact('user', 'userName', 'userId'));
		}
		return Redirect::route('listes.index')->with('userName', 'userId')->with('message_delete', 'Vous n\'êtes pas admin');	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  User $user
	 * @return Response
	 */
	public function update(User $user, Request $request)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		if(Auth::user()->admin == '1')
		{
			$this->validate($request, $this->rules);

			$input = array_except(Input::all(), '_method');
			$user->update($input);

			$user->save();

			return Redirect::route('users.index')->with('message_modif', 'Utilisateur ' .$user->name. ' mis à jour');
		}
		return Redirect::route('listes.index')->with('userName', 'userId')->with('message_delete', 'Vous n\'êtes pas admin');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  User $user
	 * @return Response
	 */
	public function destroy(User $user)
	{
		$userName = Auth::user()->name;
		$userId = Auth::user()->id;
		if(Auth::user()->admin == '1')
		{
			
			if (Auth::user()->id == $user->id)
				return Redirect::route('users.edit', $user->id)->with('message_delete', 'Impossible de supprimer l\'utilisateur ' .$user->name. ' car il est connecté');

			$nom_user = $user->name;
			$user->delete();
			return Redirect::route('users.index')->with('message_modif', 'Utilisateur ' .$user->name. ' supprimé');
		}
		return Redirect::route('listes.index')->with('userName', 'userId')->with('message_delete', 'Vous n\'êtes pas admin');	
	}
}
