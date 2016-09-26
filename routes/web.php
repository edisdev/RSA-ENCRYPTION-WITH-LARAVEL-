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

Route::get('/', 'HomeController@index');
Route::get('/rsa/public/encryption','HomeController@valueinfo');
Route::get('/rsa/public/bilgi','HomeController@info');
Route::get('/rsa/public/decryption','HomeController@decryption');
Route::get('/rsa/public/concent','HomeController@concent');
Route::post('/rsa/public/concent',"HomeController@databases");



