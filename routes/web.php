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

/*Route::get('/', function () {
    return view('welcome');
});*/

 Route::get('/', 'HomeController@index');

Auth::routes();



Route::resource('messages', 'MessagesController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('/', 'PortafoliosController@index');
    
    
    Route::resource('portafolios', 'PortafoliosController');
    
});
