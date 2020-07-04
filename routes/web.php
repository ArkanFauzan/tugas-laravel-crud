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

Route::get('/pertanyaan','PertanyaanController@index');//list pertanyaan
Route::get('/pertanyaan/create','PertanyaanController@create');//form buat pertanyaan
Route::post('/pertanyaan','PertanyaanController@store');//buat pertanyaan
Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show_by_id');//detail pertanyaan berdasarkan id
Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');// form edit pertanyaan
Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');//update pertanyaan
Route::delete('/pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');//hapus pertanyaan

Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');