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
	$news_posts=Posts::all();
	$navbars=Navs::all();
	$posts=Posts::all();
	$cols=Columns::select('columns_name','id')->get();
	return View::make('home')
		->with('news_posts',$news_posts)
		->with('navbars',$navbars)
		->with('col_set',$cols);
});


Route::get('users/{users?}',array('before'=>'auth.basic',function($users){
	$users1=User::where('name','=',$users)
				  ->select('name','email','led1')
				  ->get();
	$data=$users1;
	return Response::json($data);
}));

Route::get('blogs/{blog?}',function($posts){
	$navbars=Navs::all();
    $posts=Posts::where('post_title','=',$posts)
		    ->select('post_title','post_content','updated_at','created_at')
		    ->get();
    $blogs=$posts;
    return View::make('blogs')->with('posts',$posts)
      						  ->with('navbars',$navbars);
});

Route::get('page/{navs?}',function($navs){
	$navigation=Navs::where('nav_name','=',$navs)->get();
	$navbars=Navs::all();
 	$news_posts=Posts::all();
 	$col_set=Columns::all();
 	if($navs=="Home"){
 		return Redirect::to('/');
 	}
    return View::make('admin_main')
    								->with('navbars',$navbars)
    								->with('news_posts',$news_posts)
    								->with('page_name',$navs)
    								->with('col_set',$col_set);
});

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


Route::get('sitemap', function(){

    $sitemap = App::make("sitemap");

    // set item's url, date, priority, freq
    $sitemap->add(URL::to('blogs'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('posts'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

    $posts = DB::table('posts')->orderBy('created_at', 'updated_at')->get();


    foreach ($posts as $post)
    {
        $sitemap->add($post->post_title, $post->created_at, '0.8', 'daily');
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');

});

/*
Route::get('/athome/{atid}',function($atid){
	$atdata=Athomes::where('id','=',$atid)
						->select('id','temperature','sensors1','sensors2','led1')
						->get();
	return Response::json($atdata);
});

Route::get('/athome',function(){
	$maxid=Athomes::max('id');
	return View::make('athome')->with('maxid',$maxid);
});
*/
Route::resource('athome', 'AthomesController');