<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','TestController@index');
Route::get('/admin','DasboardController@index');
Route::get('/main/status.html',['uses' => 'StatusMainController@index']);

// main status done 
//Route::get('/main/status.html',['user' => 'StatusMainController@index']);
Route::get('/main/status/create.html',['uses' => 'StatusMainController@create']);
Route::get('/main/status/store.html',['uses' => 'StatusMainController@store']);
Route::get('/main/status/show/{id}',['uses' => 'StatusMainController@show']);
Route::get('/main/status/edit/{id}',['uses' => 'StatusMainController@edit']);
Route::get('/main/status/update',['uses' => 'StatusMainController@update']);
Route::get('/main/status/delete/{id}',['uses' => 'StatusMainController@destroy']);
Route::get('/main/status/search',['uses' => 'StatusMainController@search']);



