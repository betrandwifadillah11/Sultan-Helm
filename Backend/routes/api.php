<?php

use App\Http\Controllers\Karyawan;
use App\Http\Controllers\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// route karyawan 
// untuk tampil data
Route::get('/view', [Produk::class,'view']);
Route::get('/detail/{parameter}', [Produk::class,'detail']);
Route::delete('/delete/{parameter}', [Produk::class,'delete']);
// route insert data
Route::post('/insert', [Produk::class,'insert']);

//route put (uodate)
Route::put('/update/{parameter}', [Produk::class,'update']);

