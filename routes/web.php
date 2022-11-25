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
    return view('index');
});

Route::post('/order','App\Http\Controllers\OrderController@store');

Route::get('/detail','App\Http\Controllers\DetailController@detail');

Route::get('/admin','App\Http\Controllers\TiketController@getAll');

Route::get('/admin/delete/{id}','App\Http\Controllers\TiketController@delete');

Route::get('/admin/edit/{id}','App\Http\Controllers\TiketController@edit');

Route::post('/admin/update','App\Http\Controllers\TiketController@update');

Route::get('/admin/verifikasi', function () {
    return view('verifikasi_admin');
});

Route::match(['get', 'post'], '/admin/kode','App\Http\Controllers\TiketController@search_kode')->name('kode');

Route::post('/admin/update_verifikasi','App\Http\Controllers\TiketController@update_verifikasi');

Route::get('/admin/laporan','App\Http\Controllers\LaporanController@getReport');

Route::post('/admin/actionlogin', 'App\Http\Controllers\LoginController@actionlogin');

Route::get('/admin/actionlogout', 'App\Http\Controllers\LoginController@actionlogout')->middleware('auth');

Route::get('/admin/login', 'App\Http\Controllers\LoginController@login')->name('login');

Route::get('/admin/register', function () {
    return view('register');

});Route::post('/admin/actionregister', 'App\Http\Controllers\RegisterController@actionregister');










