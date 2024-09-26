<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeramalanController;
use App\Http\Controllers\ProduksiController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/create', [BarangController::class,'create']);
Route::post('/barang', [BarangController::class,'store']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::put('/barang/update/{id}', [BarangController::class,'update']);
Route::delete('/barang/delete/{id}', [BarangController::class,'delete']);

Route::get('/produksi', [ProduksiController::class,'index']);
Route::get('/produksi/create', [ProduksiController::class,'create']);
Route::post('/produksi', [ProduksiController::class,'store']);
Route::get('/produksi/edit/{id}', [ProduksiController::class,'edit']);
Route::put('/produksi/update/{id}', [ProduksiController::class,'update']);
Route::delete('/produksi/delete/{id}', [ProduksiController::class,'delete']);

Route::get('/masuk', [BarangmasukController::class,'index']);
Route::get('/masuk/create', [BarangmasukController::class,'create']);
Route::post('/masuk', [BarangmasukController::class,'store']);
Route::get('/masuk/edit/{id}', [BarangmasukController::class,'edit']);
Route::put('/masuk/update/{id}', [BarangmasukController::class,'update']);
Route::delete('/masuk/delete/{id}', [BarangmasukController::class,'delete']);

Route::get('/keluar', [BarangkeluarController::class,'index']);
Route::get('/keluar/create', [BarangkeluarController::class,'create']);
Route::post('/keluar', [BarangkeluarController::class,'store']);
Route::get('/keluar/edit/{id}', [BarangkeluarController::class,'edit']);
Route::put('/keluar/update/{id}', [BarangkeluarController::class,'update']);
Route::delete('/keluar/delete/{id}', [BarangkeluarController::class,'delete']);

Route::resource('/barangmasuk', BarangmasukController::class);
Route::resource('/barangkeluar', BarangkeluarController::class);
Route::resource('/peramalan', PeramalanController::class);


