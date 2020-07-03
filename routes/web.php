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

// Route Asline
// Route::get('/', function () {
//     return view('welcome');
// });

// Route Untuk Tugas
Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan daftar pertanyaan

Route::get('/pertanyaan/create', 'PertanyaanController@create');  // mengarahkan ke form input pertanyaan

Route::post('/pertanyaan', 'PertanyaanController@store'); // menginput pertanyaan ke dalam database

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); // menampilkan jawaban dari suatu pertanyaan

Route::get('/jawaban/create/new/{pertanyaan_id} ', 'JawabanController@create'); //mengarahkan ke form input jawaban

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); // menyimpan jawaban ke database

Route::post('/jawaban/create/kirim', 'JawabanController@kirim'); // kiriman dari form

