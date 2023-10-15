<?php

use App\Http\Controllers\Dashboardmhs;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiMahasiswaController;
use App\Http\Controllers\RekomendasiController;
use App\Models\NilaiMahasiswa;
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

    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
    Route::get('/mahasiswas-edit-{mahasiswa}', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
    Route::put('/mahasiswas-update-{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
    Route::delete('/mahasiswas-delete-{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.delete');
    Route::get('/kriterias-sub-create{kriteria}', [KriteriaController::class, 'createSub'])->name('kriterias-sub.create');
    Route::post('/kriterias-sub-store{kriteria}', [KriteriaController::class, 'storeSub'])->name('kriterias-sub.store');
    Route::get('/kriterias-sub-edit{kriteria}', [KriteriaController::class, 'editSub'])->name('kriterias-sub.edit');
    Route::put('/kriterias-sub-update{kriteria}', [KriteriaController::class, 'updateSub'])->name('kriterias-sub.update');
    Route::delete('/kriterias-sub-delete-{kriteria}', [KriteriaController::class, 'destroySub'])->name('kriterias-sub.delete');

    Route::get('/kriterias', [KriteriaController::class, 'index'])->name('kriterias.index');
    Route::get('/kriterias-create', [KriteriaController::class, 'create'])->name('kriterias.create');
    Route::post('/kriterias-store', [KriteriaController::class, 'store'])->name('kriterias.store');
    Route::get('/kriterias-edit-{kriteria}', [KriteriaController::class, 'edit'])->name('kriterias.edit');
    Route::put('/kriterias-update-{kriteria}', [KriteriaController::class, 'update'])->name('kriterias.update');
    Route::delete('/kriterias-delete-{kriteria}', [KriteriaController::class, 'destroy'])->name('kriterias.delete');



    Route::get('/nilaiMahasiswa-show-{mahasiswa}', [NilaiMahasiswaController::class, 'show'])->name('nilaiMahasiswa.show');
    Route::get('/nilaiMahasiswa', [NilaiMahasiswaController::class, 'index'])->name('nilaiMahasiswa.index');
    Route::get('/nilaiMahasiswa-create-{id}', [NilaiMahasiswaController::class, 'create'])->name('nilaiMahasiswa.create');
    Route::post('/nilaiMahasiswa', [NilaiMahasiswaController::class, 'store'])->name('nilaiMahasiswa.store');
    Route::get('/nilaiMahasiswa-edit-{nilaiMahasiswa}', [NilaiMahasiswaController::class, 'edit'])->name('nilaiMahasiswa.edit');
    Route::put('/nilaiMahasiswa-update-{nilaiMahasiswa}', [NilaiMahasiswaController::class, 'update'])->name('nilaiMahasiswa.update');
    Route::delete('/nilaiMahasiswa-delete-{nilaiMahasiswa}', [NilaiMahasiswaController::class, 'destroy'])->name('nilaiMahasiswa.delete');
    Route::get('/nilaiMahasiswa-search', [NilaiMahasiswaController::class, 'search'])->name('nilaiMahasiswa.search');





    Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
    Route::get('/rekomendasi-create', [RekomendasiController::class, 'create'])->name('rekomendasi.create');
    Route::post('/rekomendasi-store', [RekomendasiController::class, 'store'])->name('rekomendasi.store');
    Route::get('/rekomendasi-edit-{rekomendasi}', [RekomendasiController::class, 'edit'])->name('rekomendasi.edit');
    Route::put('/rekomendasi-update-{rekomendasi}', [RekomendasiController::class, 'update'])->name('rekomendasi.update');
    Route::delete('/rekomendasi-delete-{rekomendasi}', [RekomendasiController::class, 'destroy'])->name('rekomendasi.delete');
    Route::get('/dbmahasiswa', [Dashboardmhs::class, 'index'])->name('dashboardmhs.index');
});