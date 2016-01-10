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


Route::get('/', ['middleware' => 'auth', 'uses' => 'ProgressUpdateController@index']);
Route::get('welcome', ['middleware' => 'guest', 'uses' => 'ProgressUpdateController@welcome']);
Route::post('update/create', ['middleware' => 'auth', 'uses' => 'ProgressUpdateController@store']);

Route::post('comment/create', ['middleware' => 'auth', 'uses' => 'CommentController@store']);
Route::post('encouragement/create', ['middleware' => 'auth', 'uses' => 'EncouragementController@store']);

Route::get('mygoals', ['middleware' => 'auth', 'uses' => 'GoalsController@index']);
Route::get('setgoals', ['middleware' => 'auth', 'uses' => 'GoalsController@create']);
Route::post('setgoals', ['middleware' => 'auth', 'uses' => 'GoalsController@store']);
Route::delete('removegoal/{id}', ['middleware' => 'auth', 'uses' => 'GoalsController@destroy']);
Route::get('editgoal/{id}', ['middleware' => 'auth', 'uses' => 'GoalsController@edit']);
Route::patch('editgoal/{id}', ['middleware' => 'auth', 'uses' => 'GoalsController@update']);

Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@index']);
Route::get('profile/create', ['middleware' => 'auth', 'uses' => 'ProfileController@create']);
Route::post('profile/create', ['middleware' => 'auth', 'uses' => 'ProfileController@store']);
Route::get('profile/update', ['middleware' => 'auth', 'uses' => 'ProfileController@edit']);
Route::patch('profile/update', ['middleware' => 'auth', 'uses' => 'ProfileController@update']);

Route::get('inbox', ['middleware' => 'auth', 'MessageController@index']);
Route::post('inbox/send', ['middleware' => 'auth', 'MessageController@store']);

Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController',]);

