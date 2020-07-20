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
// Route::get('/user/{email}', 'WargaController@editwarga');
Route::get('/user', 'WargaController@editwarga');
Route::post('/useredit/{id}', 'WargaController@edituserpost');

//halaman simpan data keluar
Route::get('/formcatatan', 'CatatanController@index');
Route::post('/catatanpost', 'CatatanController@simpancatatan');
Route::get('/daftarjalan', 'CatatanController@indexdata');
Route::get('/datakeluar', 'CatatanController@alldatakeluar');
Route::get('/permintaan', 'CatatanController@allmenunggu');
Route::get('/terima/{kode_unik}', 'CatatanController@terimapermintaan');
Route::get('/tolak/{kode_unik}', 'CatatanController@tolakpermintaan');
Route::get('/postbatalperjalanan/{kode_unik}', 'CatatanController@postpjbatal');
Route::get('/publicpostbatalperjalanan/{kode_unik}', 'CatatanController@pubpostpjbatal');

// Warga
Route::get('/dashboardwarga', 'WargaController@dashboardwarga');
Route::get('/publicuser', 'WargaController@publiceditwarga');
Route::get('/publicdaftarjalan', 'CatatanController@publicindexdata');
Route::get('/publicformcatatan', 'CatatanController@public_index');
Route::post('/publiccatatanpost', 'CatatanController@simpancatatanwarga');

//Previlege
Route::get('/hakakses', 'WargaController@halaman_hak');
Route::get('/adminacc/{nik}', 'WargaController@jadisatgas');
Route::get('/adminexit/{nik}', 'WargaController@jadiwarga');











//halaman utama (login)
Route::get('/lav', function () {
	return view('welcome');
});

