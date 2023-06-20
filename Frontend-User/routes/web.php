<?php

use App\Http\Controllers\Karyawan;
use App\Http\Controllers\Produk;
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

//Route::get('/', function () {
    //return view('welcome');
//});


//buat root untuk tampil data
Route::get("/",[Produk::class,'index']);

//tambah data
Route::get("/add",[Produk::class,'add']);

//hapus data
Route::delete("/delete/{parameter}",[Produk::class,'delete']);

Route::post("/store", [Produk::class, 'index'])->name('produk.store');
