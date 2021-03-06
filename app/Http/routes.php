<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['guest']], function(){
	//login
	Route::get('login', ['uses' => 'LoginController@index', 'as' => 'auth.login']);
	Route::post('/attempt-login', ['uses' => 'LoginController@authenticate', 'as' => 'auth.login.attempt']);
	//register
	Route::get('/register', ['uses' => 'RegisterController@index', 'as' => 'auth.register']);
	Route::post('/register/store', ['uses' => 'RegisterController@store', 'as' => 'auth.register.store']);
});

Route::group(['middleware' => ['auth']], function(){
	Route::get('/logout', ['uses' => 'LoginController@logout', 'as' => 'auth.logout']);
	Route::get('/dashboard', ['uses' => 'DashboardController@index', 'as' => 'dashboard']);
	//projects
	Route::get('/projects', ['uses' => 'ProjectController@index', 'as' => 'projects.index']);
	Route::get('/projects/create', ['uses' => 'ProjectController@create', 'as' => 'projects.create']);
	Route::post('/projects/store', ['uses' => 'ProjectController@store', 'as' => 'projects.store']);
	Route::get('/projects/{projectId}/edit', ['uses' => 'ProjectController@edit', 'as' => 'projects.edit']);
	Route::post('/projects/{projectId}/update', ['uses' => 'ProjectController@update', 'as' => 'projects.update']);
	//tasks
	Route::get('/projects/{projectId}/tasks', ['uses' => 'TaskController@index', 'as' => 'tasks.index']);
	Route::post('/projects/{projectId}/tasks/store', ['uses' => 'TaskController@store', 'as' => 'tasks.store']);
	Route::get('/projects/{projectId}/tasks/{taskId}/edit', ['uses' => 'TaskController@edit', 'as' => 'tasks.edit']);
	Route::get('/projects/{projectId}/tasks/{taskId}/display', ['uses' => 'TaskController@display', 'as' => 'tasks.display']);
});


Route::get('/', function(){
	if(Auth::user())
		return redirect('/dashboard');
	else
		return redirect('/login');
});
