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
    Route::get('/kriterias-edit-{kriteria}', [KriteriaController::class, 'edit'])->name('kriterias.edit');
    Route::put('/kriterias-update-{kriteria}', [KriteriaController::class, 'update'])->name('kriterias.update');
    Route::delete('/kriterias-delete-{kriteria}', [KriteriaController::class, 'destroy'])->name('kriterias.delete');
    Route::get('/nilaiMahasiswa', [NilaiMahasiswaController::class, 'index'])->name('nilaiMahasiswa.index');
    Route::get('/nilaiMahasiswa-create', [NilaiMahasiswaController::class, 'create'])->name('nilaiMahasiswa.create');
    Route::post('/nilaiMahasiswa', [NilaiMahasiswaController::class, 'store'])->name('nilaiMahasiswa.store');
    Route::get('/nilaiMahasiswa-edit-{nilaiMahasiswa}', [NilaiMahasiswaController::class, 'edit'])->name('nilaiMahasiswa.edit');
    Route::put('/nilaiMahasiswa-update-{nilaiMahasiswa}', [NilaiMahasiswaController::class, 'update'])->name('nilaiMahasiswa.update');
    Route::delete('/nilaiMahasiswa-delete-{nilaiMahasiswa}', [NilaiMahasiswaController::class, 'destroy'])->name('nilaiMahasiswa.delete');
    Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
    Route::get('/rekomendasi-create', [RekomendasiController::class, 'create'])->name('rekomendasi.create');
    Route::post('/rekomendasi-store', [RekomendasiController::class, 'store'])->name('rekomendasi.store');
    Route::get('/rekomendasi-edit-{rekomendasi}', [RekomendasiController::class, 'edit'])->name('rekomendasi.edit');
    Route::put('/rekomendasi-update-{rekomendasi}', [RekomendasiController::class, 'update'])->name('rekomendasi.update');
    Route::delete('/rekomendasi-delete-{rekomendasi}', [RekomendasiController::class, 'destroy'])->name('rekomendasi.delete');
});
