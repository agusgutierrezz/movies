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
Route::get('/addActor','ActorsController@ver');
Route::post('/addActor','ActorsController@store');
Route::get('/actor/{id}/edit', "ActorsController@edit");
Route::post('/borrarActor','ActorsController@borrar');
Route::put('/editarActor', 'ActorsController@update');
