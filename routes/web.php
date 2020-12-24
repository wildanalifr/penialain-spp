<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
	Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
	Route::post('/siswa/update', 'SiswaController@update')->name('siswa.update');
	Route::get('/siswa/delete/{id}', 'SiswaController@delete')->name('siswa.update');

	Route::get('/kriteria', 'KriteriaController@index')->name('kriteria.index');
	Route::post('/kriteria/store', 'KriteriaController@store')->name('kriteria.store');
	Route::post('/kriteria/update', 'KriteriaController@update')->name('kriteria.update');
	Route::get('/kriteria/delete/{id}', 'KriteriaController@delete')->name('kriteria.update');

	Route::get('/alternatif', 'AlternatifController@index')->name('alternatif.index');
	Route::post('/alternatif/store', 'AlternatifController@store')->name('alternatif.store');
	Route::post('/alternatif/update', 'AlternatifController@update')->name('alternatif.update');
	Route::get('/alternatif/delete/{id}', 'AlternatifController@delete')->name('alternatif.update');

	Route::get('/bobot', 'BobotController@index')->name('bobot.index');
	Route::post('/bobot/store', 'BobotController@store')->name('bobot.store');
	Route::post('/bobot/update', 'BobotController@update')->name('bobot.update');
	Route::get('/bobot/delete/{id}', 'BobotController@delete')->name('bobot.update');

	Route::get('/skala', 'SkalaController@index')->name('skala.index');
	Route::post('/skala/store', 'SkalaController@store')->name('skala.store');
	Route::post('/skala/update', 'SkalaController@update')->name('skala.update');
	Route::get('/skala/delete/{id}', 'SkalaController@delete')->name('skala.update');


	Route::get('/penilaian', 'PenilaianController@index')->name('penilaian.index');
	Route::post('/penilaian/store', 'PenilaianController@store')->name('penilaian.store');
	Route::post('/penilaian/update', 'PenilaianController@update')->name('penilaian.update');
	Route::get('/penilaian/delete/{id}', 'PenilaianController@delete')->name('alternatif.delete');
	Route::get('/alternatif', 'PenilaianController@refresh');
});

Route::get('/test', 'TestController@index');

Route::get('/home', 'HomeController@index')->name('home');
