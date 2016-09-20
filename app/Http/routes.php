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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', 'TestController@getIndex');
Route::post('/employee', 'TestController@postIndex');
Route::post('/employee/{id}', 'TestController@deleteIndex');
Route::get('/employee/view/{id}', 'TestController@viewIndex');
Route::post('/employee/view/{id}', 'TestController@postViewIndex');

// Route::get('/map', 'TestController@getIndex');

Route::auth();

Route::get('/home', 'HomeController@index');
