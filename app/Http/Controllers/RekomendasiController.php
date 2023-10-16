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
        $nilaiMahasiswa = NilaiMahasiswa::all();
        $this->hitungNilaiAlternatif();
        return view('rekomendasi.index', compact('rekomendasis', 'nilaiMahasiswa'));
    }

    public function hitungNilaiAlternatif()
    {
        $nilaiMahasiswa = NilaiMahasiswa::all();

        // Ambil bobot kriteria dan bobot subcriteria
        $bobotKriteria = Kriteria::pluck('bobot', 'id')->toArray();
        $bobotSubcriteria = Subcriteria::pluck('bobot', 'id')->toArray();
        $skorPositif = null;
        $skorNegatif = null;
        // Hitung skor positif dan skor negatif
        foreach ($nilaiMahasiswa as $nilaiMahasiswa) {
            // Ambil nilai subcriteria dari database
            $subcriteria = Subcriteria::where('id', $nilaiMahasiswa->subcriteria_id)->first();

            $nilaiSubcriteria = $nilaiMahasiswa->nilai;
            $bobotKriteria = $bobotKriteria[$nilaiMahasiswa->kriteria_id];
            $bobotSubcriteria = $bobotSubcriteria[$subcriteria->subcriteria_id];

            $skorPositif += pow($nilaiSubcriteria * $bobotKriteria * $bobotSubcriteria, 2);
            $skorNegatif += pow($nilaiSubcriteria * -1 * $bobotKriteria * $bobotSubcriteria, 2);
        }

        // Hitung skor alternatif
        $skorAlternatif = sqrt($skorPositif) / (sqrt($skorPositif) + sqrt($skorNegatif));

        // Hitung skor alternatif
        $skorAlternatif = sqrt($skorPositif) / (sqrt($skorPositif) + sqrt($skorNegatif));
        $nilaiMahasiswa->skor_alternatif = $skorAlternatif;
        $nilaiMahasiswa->save();


        return redirect()->route('rekomendasi.index'); // Ganti dengan rute yang sesuai
    }

    public function getRekomendasi()
    {
        // Ambil semua nilai mahasiswa dari database
        $nilaiMahasiswa = NilaiMahasiswa::all();

        // Urutkan alternatif berdasarkan nilai preferensi
        $nilaiMahasiswa = $nilaiMahasiswa->sortByDesc('skor_alternatif');

        // Kembalikan daftar alternatif yang telah diurutkan
        return view('rekomendasi.index', compact('nilaiMahasiswa'));
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
