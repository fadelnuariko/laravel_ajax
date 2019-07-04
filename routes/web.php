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
    return view('content.home');
});

Route::get('/home', function () {
    return view('content.home');
});

Route::GET("/data", "DataController@index");

Route::GET("/data/edit/{id}", "DataController@edit");

Route::GET("/data/delete/{id}", "DataController@delete");

Route::POST("data/save", "DataController@SimpanData");

Route::POST("data/edit", "DataController@EditData");
