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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/profiles/{user}', 'ProfilesController@show');

Route::get('/adverts', 'AdvertsController@index');
Route::get('/adverts/new', 'AdvertsController@create');
Route::post('/adverts/create', 'AdvertsController@store');
Route::get('/adverts/{category}/{advert}', 'AdvertsController@show');

Route::get('/bands', 'BandsController@index');
Route::post('/bands', 'BandsController@store');
Route::get('/bands/{band}', 'BandsController@show');
Route::get('/bands/{band}/edit', 'BandsController@edit');
Route::patch('/bands/{band}', 'BandsController@update');
Route::delete('/bands/{band}', 'BandsController@destroy');

Route::post('/members/{band}', 'BandMembersController@store');
Route::delete('/members/{band}', 'BandMembersController@destroy');
