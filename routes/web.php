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

Route::get('/','UjianController@index');
Route::get('/add', 'UjianController@add');
Route::get('/upd/{id}', 'UjianController@upd');
Route::get('/del/{id}', 'UjianController@del');
Route::put('/edit/{id}', 'UjianController@edit');
Route::post('/store','UjianController@store');
