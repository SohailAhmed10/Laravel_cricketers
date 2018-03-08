<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index')->with('users', $users);
	}

	public function show($username)
	{
		$user = User::where('username', '=', $username)->first();
		return View::make('users.show')->with('user', $user);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		
        
        if (! User::isValid(Input::all()))
        {
        	return Redirect::back()->withInput()->withErrors(User::$messages);
        } 
        /**
		if ($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		*/
        
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('users.index');
	}

}
