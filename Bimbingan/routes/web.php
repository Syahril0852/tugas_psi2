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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




















Route::resource('jurusans', App\Http\Controllers\jurusanController::class);





Route::resource('dataMahasiswas', App\Http\Controllers\DataMahasiswaController::class);

Route::resource('dataDosens', App\Http\Controllers\DataDosenController::class);



Route::resource('dataKonsultasis', App\Http\Controllers\DataKonsultasiController::class);

Route::resource('prodis', App\Http\Controllers\ProdiController::class);