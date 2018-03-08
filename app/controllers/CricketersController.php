<?php

class CricketersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cricketers = Cricketer::all();
		return View::make('cricketers.index')->with('cricketers', $cricketers);
	}

	public function show($name)
	{
		$cricketer = Cricketer::where('name', '=', $name)->first();
		return View::make('cricketers.show')->with('cricketer', $cricketer);
	}

	public function create()
	{
		return View::make('cricketers.create');
	}

	public function store()
	{
		$cricketer = new Cricketer;

		$cricketer->name = Input::get('name');
		$cricketer->number_of_sixes = Input::get('number_of_sixes');
		$cricketer->age = Input::get('age');
		$cricketer->shirt_number = Input::get('shirt_number');

		$cricketer->save();

		return Redirect::route('cricketers.index');
	}

}
