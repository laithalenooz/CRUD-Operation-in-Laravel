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

Route::resource('/', 'CitizenController');
Route::post('/citizen/store', 'CitizenController@store');
Route::get('/citizen/edit/{id}', 'CitizenController@show');
Route::post('/citizen/edit/{id}', 'CitizenController@update');
Route::get('/citizen/delete/{id}', 'CitizenController@destroy');
Route::get('/citizen/clear_all', 'CitizenController@clear');
