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

    Route::get('/kriterias', [KriteriaController::class, 'index'])->name('kriterias.index');
    Route::get('/kriterias-create', [KriteriaController::class, 'create'])->name('kriterias.create');
    Route::post('/kriterias-store', [KriteriaController::class, 'store'])->name('kriterias.store');
    Route::get('/kriterias-edit/{kriteria}', [KriteriaController::class, 'edit'])->name('kriterias.edit');
    Route::put('/kriterias-update/{kriteria}', [KriteriaController::class, 'update'])->name('kriterias.update');
    Route::get('/nilaiMahasiswa', [NilaiMahasiswaController::class, 'index'])->name('nilaiMahasiswa.index');
    Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
});
