<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiMahasiswaController;
use App\Http\Controllers\RekomendasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('kriterias', KriteriaController::class);

    Route::get('/nilaiMahasiswa', [NilaiMahasiswaController::class, 'index'])->name('nilaiMahasiswa.index');
    Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
});
