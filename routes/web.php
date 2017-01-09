<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('welcome',function(){
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('test', 'InventarisController@test');

Route::group(['middleware'=>'web'], function(){
	Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function(){
		Route::resource('inventaris','InventarisController');
	});
});
