<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| Tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// ====================
// STATIC PAGES =======
// ====================

Route::get('/', array('as' => 'home', function()
{
	return View::make('hello');
}));

// ====================
// ANGULAR STUFF ======
// ====================

Route::get('angular', function()
{
    return View::make('index');
});

Route::group(array('prefix' => 'service'), function()
{
    Route::resource('authenticate', 'AngularAuthController');
    Route::resource('movies', 'MovieController');
});

// End angular stuff

Route::get('profile', function()
{
    //return 'Welcome, your email address is ' . Auth::user()->email;
    return View::make('profile');
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', array('only' => array('index', 'store', 'create', 'destroy')));

Route::resource('questions', 'QuestionsController');

// http://yoursite.com/tasks
Route::get('tasks', 'TasksController@index');
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

// Posts - AngularJS and pagination
Route::get('posts', function() 
{
    return Post::paginate( $limit = 10 );
});

Event::listen('user.signup', function(User $user)
{
    // subscribe user to Mailchimp list
    var_dump($user->toArray());
});

Route::get('pub', function()
{
    $user = User::first();
    Event::fire('user.signup', ['user' =>$user]);
    return 'firedRed';
});

// ====================
// 404 ================
// ====================
App::missing(function($exception) {
    return Response::view('error', array(), 404);
});







