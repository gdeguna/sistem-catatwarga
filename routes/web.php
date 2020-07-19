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
    return view('login');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Page System (Biar ada doang)
// Route::get('/datakeluar', function () {
// 	return view('datakeluar');
// });
// Route::get('/permintaan', function () {
// 	return view('permintaan');
// });
Route::get('/1', function () {
	return view('formcatatan');
});
Route::get('/scanner', function () {
	return view('scanner');
});



//semua halaman
Route::get('/dashboard', 'WargaController@dashboard');
Route::get('/datamasyarakat', 'WargaController@index');

//halaman register&login
Route::get('/register', function () {
	return view('register');
});
Route::post('/registerpost', 'AuthController@registerpost');
Route::post('/loginpost', 'AuthController@postlogin')->name('loginpost');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/user/{email}', 'WargaController@editwarga');
Route::post('/useredit/{id}', 'WargaController@edituserpost');

//halaman simpan data keluar
Route::get('/formcatatan/{email}', 'CatatanController@index');
Route::post('/catatanpost', 'CatatanController@simpancatatan');
Route::get('/daftarjalan/{email}', 'CatatanController@indexdata');
Route::get('/datakeluar', 'CatatanController@alldatakeluar');
Route::get('/permintaan', 'CatatanController@allmenunggu');
Route::get('/terima/{kode_unik}', 'CatatanController@terimapermintaan');
Route::get('/tolak/{kode_unik}', 'CatatanController@tolakpermintaan');

// Warga
Route::get('/dashboardwarga', 'WargaController@dashboardwarga');
Route::get('/publicuser/{email}', 'WargaController@publiceditwarga');
Route::get('/publicdaftarjalan/{email}', 'CatatanController@publicindexdata');
Route::get('/publicformcatatan/{email}', 'CatatanController@public_index');
Route::post('/publiccatatanpost', 'CatatanController@simpancatatanwarga');

//Previlege
Route::get('/hakakses', 'WargaController@halaman_hak');
Route::get('/adminacc/{nik}', 'WargaController@jadisatgas');
Route::get('/adminexit/{nik}', 'WargaController@jadiwarga');











//halaman utama (login)
Route::get('/lav', function () {
	return view('welcome');
});

