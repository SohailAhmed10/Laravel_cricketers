<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		$users = $this->user->all();
		return View::make('users.index')->with('users', $users);
	}

	public function show($username)
	{
		$user = $this->user->where('username', '=', $username)->first();
		return View::make('users.show')->with('user', $user);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{

		$this->user->fill(Input::all());

        if (! $this->user->isValid($input = Input::all()))
        {
        	return Redirect::back()->withInput()->withErrors($this->user->messages);
        } 
        /**
		if ($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		*/

		$this->user->create($input);
        
        /**
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		*/

		return Redirect::route('users.index');
	}

}
