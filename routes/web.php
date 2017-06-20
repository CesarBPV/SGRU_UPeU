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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/permcorto','HomeController@permcorto');
Route::get('/worship','HomeController@worship');
Route::get('/permlargo','HomeController@permlargo');
Route::get('/permcorto','HomeController@permcorto');
Route::get('/permlargo','HomeController@permlargo');