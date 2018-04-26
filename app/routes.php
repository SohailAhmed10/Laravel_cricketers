<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/about/die', 'PagesController@die');

//Route::get('users', 'UsersController@index');
//Route::get('users/{username}', 'UsersController@show');
Route::resource('users', 'UsersController');

//Route::get('cricketers', 'CricketersController@index');
//Route::get('cricketers/{name}', 'CricketersController@show');
Route::resource('cricketers', 'CricketersController');

//Route::get('users', function()
//{
//	$users = User::all();
//	$user = User::find(1);
//
//	return $user->email; 
//}

Route::get('/', function()
{
	// Using user all, find
	//$users = DB::table('users')->where('username', '!=', 'Jeffrey') -> get();
	//$users = User::where('username', '!=', 'Jeffrey')->get();
	//$users = User::all();
    //$user = DB::table('users')->find(1);
    //$user = User::find(1);
    
    // Creating a new user method 1
    //$user = new User;
    //$user->username = 'NewUser';
    //$user->password = Hash::make('password');

    //$admin = new User;
    //$admin->username = 'Admin';
    //$user->password = Hash::make('password');
	//return $user;
	//$user->save();
    
    // Creating aq new user method 2
	//User::create([
	//	'username' => 'AnotherUser',
	//	'password' => Hash::make('1234')
	//]);

	// Updating a user
	//$user = User::find(2);
	//$user->username = 'UpdatedName';
	//$user->save();
	
	// Deleting a user
	//$user = User::find(2);
	//$user -> delete();

	// Order by the username in alphabetical order
    //return User::orderBy('username', 'asc')->take(2)->get();

    //$lala = Cricketer::where('number_of_sixes', '>', '470')->get();
    
	return View::make('cricketers.homepage');
    //return Cricketer::orderBy('number_of_sixes', 'desc')->get();

    //return User::all();

});