<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BrgMskController;
use App\Http\Controllers\BrgKeluarController;
use App\Http\Controllers\BrgReturController;
use App\Http\Controllers\LaporanController;

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

Route::get('/login', [AuthController::class, 'index'])->name('index')->middleware('guest');
Route::post('/cek_login', [AuthController::class, 'cek_login']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);

    // data master user
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/{id}/update', [UserController::class, 'update']);
    Route::get('/user/{id}/destroy', [UserController::class, 'destroy']);

    // data master brand
    Route::get('/brand', [BrandController::class, 'index']);
    Route::post('/brand/store', [BrandController::class, 'store']);
    Route::post('/brand/{id}/update', [BrandController::class, 'update']);
    Route::get('/brand/{id}/destroy', [BrandController::class, 'destroy']);

    // data master barang
    Route::get('/barang', [BarangController::class, 'index']);
    Route::post('/barang/store', [BarangController::class, 'store']);
    Route::post('/barang/{id}/update', [BarangController::class, 'update']);
    Route::get('/barang/{id}/destroy', [BarangController::class, 'destroy']);

    // data master barang_masuk
    Route::get('/barang_masuk', [BrgMskController::class, 'index']);
    Route::get('/barang_masuk/ajax', [BrgMskController::class, 'ajax']);
    Route::get('/barang_masuk/create', [BrgMskController::class, 'create']);
    Route::post('/barang_masuk/store', [BrgMskController::class, 'store']);

    // data master barang_keluar
    Route::get('/barang_keluar', [BrgKeluarController::class, 'index']);
    Route::get('/barang_keluar/ajax', [BrgMskController::class, 'ajax']);
    Route::get('/barang_keluar/create', [BrgKeluarController::class, 'create']);
    Route::post('/barang_keluar/store', [BrgKeluarController::class, 'store']);

    // data master barang_retur
    Route::get('/barang_retur', [BrgReturController::class, 'index']);
    Route::get('/barang_retur/ajax', [BrgMskController::class, 'ajax']);
    Route::get('/barang_retur/create', [BrgReturController::class, 'create']);
    Route::post('/barang_retur/store', [BrgReturController::class, 'store']);

    // laporan
    Route::get('/laporan_barang', [LaporanController::class, 'lap_barang']);
    Route::get('/laporan_barang/cetak_brg', [LaporanController::class, 'cetak_barang']);

    Route::get('/laporan_barang_masuk', [LaporanController::class, 'lap_brg_masuk']);
    Route::get('/laporan_barang_masuk/cetak_brg_masuk', [LaporanController::class, 'cetak_brg_masuk']);

    Route::get('/laporan_barang_keluar', [LaporanController::class, 'lap_brg_keluar']);
    Route::get('/laporan_barang_keluar/cetak_brg_keluar', [LaporanController::class, 'cetak_brg_keluar']);

    Route::get('/laporan_barang_retur', [LaporanController::class, 'lap_brg_retur']);
    Route::get('/laporan_barang_retur/cetak_brg_retur', [LaporanController::class, 'cetak_brg_retur']);

    Route::get('/laporan_user', [LaporanController::class, 'lap_user']);
    Route::get('/laporan_user/cetak_user', [LaporanController::class, 'cetak_user']);

    Route::get('/laporan_brand', [LaporanController::class, 'lap_brand']);
    Route::get('/laporan_brand/cetak_brand', [LaporanController::class, 'cetak_brand']);
});
