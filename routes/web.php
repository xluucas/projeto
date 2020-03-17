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

Route::prefix('admin')->group(function () {
    Route::get('/oficina', 'OficinaController@listar')->name('oficina.listar');
    Route::get('/oficina/adicionar', 'OficinaController@adicionar')->name('oficina.form_adicionar');
    Route::get('/oficina/material', 'OficinaController@material')->name('oficina.material');
    Route::get('/oficina/quem_somos', 'OficinaController@quem_somos')->name('oficina.quem_somos');
});
