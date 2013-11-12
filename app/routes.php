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

Route::get('/', array('as' => 'home', function()
{
	return View::make('hello');
}));

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
