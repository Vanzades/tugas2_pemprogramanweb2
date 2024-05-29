<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UnitkerjaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berarti mengambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pasien/show', [PasienController::class, 'show']);
Route::get('/kelurahan/show', [KelurahanController::class, 'show']);
Route::get('/unitkerja/show', [UnitkerjaController::class, 'show']);
Route::get('/paramedik/show', [ParamedikController::class, 'show']);
Route::get('/periksa/show', [PeriksaController::class, 'show']);