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



