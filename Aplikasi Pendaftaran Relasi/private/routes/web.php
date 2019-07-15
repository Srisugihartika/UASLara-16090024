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

Route::get('/', function () {
    return view('welcome');
});



Route::get('caradaftar', function () {
    return view('layouts.caradaftar');
});

	Route::get('/login','LoginController@login')->name('admin.login');
	Route::get('/masuk','LoginController@masuk')->name('admin.masuk');
	Route::get('/admin','AdminController@admin')->name('admin.home');


	Route::resource('profiladmin', 'ProfiladminController');
	Route::get('/addprofil', 'ProfiladminController@create')->name('profil.tbhprofil');
	Route::post('/Profil/store','ProfiladminController@store');
	Route::get('/editprofil/{id}', 'ProfiladminController@edit')->name('editprofil');
	Route::post('/Profil/store','ProfiladminController@store');
	Route::put('/editprofil/update/{id}','ProfiladminController@update');
	Route::get('/hapusprofil/{id}','ProfiladminController@hapus');

	Route::resource('caradaftar', 'CaradaftarController');
	Route::get('/adddaftar', 'CaradaftarController@create')->name('daftar.tbhdaftar');
	Route::post('/upload', 'CaradaftarController@store')->name('caradaftar');;
	Route::get('/editdaftar/{id}', 'CaradaftarController@edit')->name('editinfo');
	Route::put('/editdaftar/update/{id}','CaradaftarController@update');
	Route::get('/hapusdaftar/{id}','CaradaftarController@hapus');


	Route::resource('pengumuman', 'PengumumanController');
	Route::get('/addinfo','PengumumanController@create')->name('info.tbhinfo');
	Route::post('/upload', 'PengumumanController@store');
	Route::get('/editinfo/{id}', 'PengumumanController@edit')->name('editinfo');
	Route::put('/editinfo/update/{id}','PengumumanController@update');
	Route::get('/hapusinfo/{id}','PengumumanController@hapus');




	Route::get('/user','UserController@user')->name('user.masuk');
	Route::get('/fdaftar','FdaftarController@fdaftar')->name('user.fdaftar');
	Route::get('/daftar','DaftarController@tampil')->name('user.daftar');
	Route::get('/info','infocontroller@user')->name('user.info');

