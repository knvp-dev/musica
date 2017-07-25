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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');
Route::get('/profiles/{user}/update', 'ProfilesController@update')->name('profiles.update');
Route::get('/profiles/{user}/activate/{token}', 'ProfilesController@activate');

Route::get('/instruments/{user}', 'InstrumentsController@show');
Route::post('/instruments/{user}/add', 'InstrumentsController@store');

Route::get('/adverts', 'AdvertsController@index');
Route::get('/adverts/new', 'AdvertsController@create');
Route::post('/adverts/create', 'AdvertsController@store');
Route::get('/adverts/{category}/{advert}', 'AdvertsController@show');

Route::get('/bands', 'BandsController@index');
Route::post('/bands', 'BandsController@store');
Route::get('/bands/new', 'BandsController@create');
Route::get('/bands/{band}', 'BandsController@show');
Route::get('/bands/{band}/edit', 'BandsController@edit');
Route::patch('/bands/{band}', 'BandsController@update');
Route::delete('/bands/{band}', 'BandsController@destroy');

Route::post('/members/{band}', 'BandMembersController@store');
Route::delete('/members/{band}', 'BandMembersController@destroy');
