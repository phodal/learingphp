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
	return View::make('home');
});


Route::get('users/{users?}',array('before'=>'auth.basic',function($users){
	$users1=User::where('name','=',$users)
				  ->select('name','email','led1')
				  ->get();
	$data=$users1;
	return Response::json($data);
}));


Route::get('test',function()
{
	$user=new User;
	$user->email="Zero@phodal.com";
	$user->name="zero";
	$user->save();

	return "The test user may be saved";
});

$admin_dir=Config::get('base.admin_dir');

Route::get($admin_dir,function()
{
	return View::make('admin_main');
});

Route::get('login',function()
{
	return View::make('login');
})->before('guest');

Route::post('login',function()
{
	$user=array(
		'name'=>trim(Input::get('username')),
		'password'=>trim(Input::get('password'))
		);
	if(Auth::attempt($user)){
		return Redirect::to('admin');
	}else{
		return Redirect::to('login');
	}
});

Route::filter($admin_dir,function()
{
	if(Auth::guest()){
		return Redirect::to('login')->with('flash_error','You must be login');
	}
});

Route::when($admin_dir,'/*','admin');
Route::when($admin_dir,'admin');
