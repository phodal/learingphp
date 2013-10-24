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


Route::get('/', function()
{
	$box_office=Posts::all();
	return View::make('home')
		->with('box_office',$box_office);
});


Route::get('users/{users?}',array('before'=>'auth.basic',function($users){
	$users1=User::where('name','=',$users)
				  ->select('name','email','led1')
				  ->get();
	$data=$users1;
	return Response::json($data);
}));

Route::get('admin',function()
{
	return View::make('admin_main');
});

Route::get('login',function()
{
	return View::make('login');
})->before('guest');

Route::post('login', 'UserLogin@user');

Route::get('logout', function()
{
    Auth::logout();
    return Redirect::to('login');
});
