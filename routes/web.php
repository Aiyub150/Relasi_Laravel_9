<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
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
Route::get('/welcome', function(){
    return view('index');
});

Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'tambah']);
Route::post('/admin/simpan',[AdminController::class,'simpan']);
Route::get('/admin/ubah{id}',[AdminController::class,'ubah']);
Route::post('/admin/update',[AdminController::class,'update']);
Route::get('/admin/delete{id}',[AdminController::class,'delete']);

Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'tambah']);
Route::post('/barang/simpan',[BarangController::class,'simpan']);
Route::get('/barang/ubah{id}',[BarangController::class,'ubah']);
Route::post('/barang/update',[BarangController::class,'update']);
Route::get('/barang/delete{id}',[BarangController::class,'delete']);

Route::get('/jenis', [JenisController::class,'index']);
Route::get('/jenis/tambah', [JenisController::class,'tambah']);
Route::post('/jenis/simpan',[JenisController::class,'simpan']);
Route::get('/jenis/ubah{id}',[JenisController::class,'ubah']);
Route::post('/jenis/update',[JenisController::class,'update']);
Route::get('/jenis/delete{id}',[JenisController::class,'delete']);

Route::get('/supplier', [SupplierController::class,'index']);
Route::get('/supplier/tambah', [SupplierController::class,'tambah']);
Route::post('/supplier/simpan',[SupplierController::class,'simpan']);
Route::get('/supplier/ubah{id}',[SupplierController::class,'ubah']);
Route::post('/supplier/update',[SupplierController::class,'update']);
Route::get('/supplier/delete{id}',[SupplierController::class,'delete']);

Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'tambah']);
Route::post('/transaksi/simpan',[TransaksiController::class,'simpan']);
Route::get('/transaksi/ubah{id}',[TransaksiController::class,'ubah']);
Route::post('/transaksi/update',[TransaksiController::class,'update']);
Route::get('/transaksi/delete{id}',[TransaksiController::class,'delete']);
