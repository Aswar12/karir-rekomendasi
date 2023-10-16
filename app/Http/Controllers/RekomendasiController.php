<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\NilaiMahasiswa;
use App\Models\Rekomendasi;
use App\Models\Subcriteria;
use App\Models\User;
use Illuminate\Http\Request;


class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekomendasis = Rekomendasi::with('user')->get();
        $hitungnilai = $this->hitungNilaiAlternatif();
        return view('rekomendasi.index', compact('rekomendasis', 'hitungnilai'));
    }

    public function hitungNilaiAlternatif()
    {
        // Ambil semua nilai mahasiswa dari database
        $nilaiMahasiswas = NilaiMahasiswa::all();

        // Ambil bobot dari tabel kriteria dan subkriteria
        $bobotKriteria = Kriteria::pluck('bobot', 'id')->toArray();
        $bobotSubkriteria = Subcriteria::pluck('bobot', 'id')->toArray();

        // Loop melalui setiap nilai mahasiswa
        foreach ($nilaiMahasiswas as $nilai) {
            $skorPositif = 0;
            $skorNegatif = 0;

            // Hitung skor positif
            foreach ($nilai->toArray() as $kriteria_id => $bobot) {
                if ($kriteria_id != 'mahasiswa_id') {
                    $skorPositif += pow($bobot, 2) * $bobotKriteria[$kriteria_id];
                }
            }

            // Hitung skor negatif
            foreach ($nilai->toArray() as $kriteria_id => $bobot) {
                if ($kriteria_id != 'mahasiswa_idid') {
                    $skorNegatif += pow($bobot, 2) * $bobotSubkriteria[$kriteria_id];
                }
            }

            // Simpan skor alternatif ke dalam database
            $skorAlternatif = sqrt($skorPositif) / (sqrt($skorPositif) + sqrt($skorNegatif));
            $nilai->skor_alternatif = $skorAlternatif;
            $nilai->save();
        }

        return redirect()->route('rekomendasi.index'); // Ganti dengan rute yang sesuai
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
