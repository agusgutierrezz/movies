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


Route::get('/actores', 'ActorsController@directory');
Route::get('/generos', 'GenresController@directory');
Route::get('/actor/{id}','ActorsController@show');
Route::get('/movie/{id}','MoviesController@show');
Route::post('actores/buscar','ActorsController@search');
Route::get('/peliculas','MoviesController@directory');
Route::get('/addMovie','GenresController@movies');
Route::post('/addMovie','MoviesController@store');
Route::get('/addActor','ActorsController@ver')->middleware('auth');
Route::post('/addActor','ActorsController@store')->middleware('auth');
Route::get('/actor/{id}/edit', "ActorsController@edit")->middleware('auth');
Route::post('/borrarActor','ActorsController@borrar')->middleware('auth');
Route::put('/editarActor', 'ActorsController@update')->middleware('auth');
Route::get('/user/{id}','UsersController@show')->middleware('auth');
Route::post('/user/{id}','UsersController@storeImg');
Route::get('/users','UsersController@directory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
