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
	return View::make('index');
});

Route::get('users/{users?}',function($users){
	$users1=User::where('name','=',$users)
				  ->select('name','email')
				  ->get();
	$data=$users1;
	return Response::json($data);
});
Route::get('test',function()
{
	$user=new User;
	$user->email="Zero@phodal.com";
	$user->name="zero";
	$user->save();

	return "The test user may be saved";
});

