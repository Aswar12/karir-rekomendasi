<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\NilaiMahasiswa;
use App\Models\NilaiPekerjaan;
use App\Models\Rekomendasi;
use App\Models\Subcriteria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekomendasis = Rekomendasi::all()->sortByDesc('total_skor');
        $nilaiMahasiswa = NilaiMahasiswa::all();
        $alternatif = $this->rekomendasimahasiswa();
        $alternatifkerja = $this->rekomendasikerja();
        $alternatifs = Alternatif::all();
        return view('rekomendasi.index', compact('rekomendasis', 'nilaiMahasiswa', 'alternatifs'));
    }



    function rekomendasimahasiswa()
    {
        // Ambil data dari tabel `Kriterias`, `Subcriterias`, dan `Nilai Mahasiswas`

        $nilai_mahasiswa = NilaiMahasiswa::all();
        $tabel_rekomendasi = Rekomendasi::all()->first();
        // Urutkan nilai mahasiswa berdasarkan mahasiswa ID
        $nilai_mahasiswa = $nilai_mahasiswa->groupBy('mahasiswa_id');

        // Hitung skor positif dan skor negatif untuk masing-masing alternatif
        foreach ($nilai_mahasiswa as $mahasiswa_id => $nilai) {
            $skor_positif = [];
            $skor_negatif = [];
            // $mahasiswa_id = $nilai_mahasiswa->pluck('mahasiswa_id')->first();
            foreach ($nilai as $nilai_individu) {
                // Ambil nilai subcriteria dari database
                $subcriteria = Subcriteria::where('id', $nilai_individu->subcriteria_id)->first();
                $kriteria = Kriteria::where('id', $nilai_individu->kriteria_id)->first();
                $nilai_subcriteria = $nilai_individu->nilai;
                $bobot_kriteria = $kriteria->bobot;
                $bobot_subcriteria = $subcriteria->bobot;

                $skor_positif[] += pow($nilai_subcriteria * $bobot_kriteria * $bobot_subcriteria, 2);
                $skor_negatif[] += pow($nilai_subcriteria * -1 * $bobot_kriteria * $bobot_subcriteria, 2);
            }

            // Hitung skor alternatif untuk masing-masing alternatif
            $skor_alternatif = array_map(function ($skor_positif, $skor_negatif) {
                return sqrt($skor_positif) / (sqrt($skor_positif) + sqrt($skor_negatif));
            }, $skor_positif, $skor_negatif);


            // Hitung total skor untuk masing-masing mahasiswa
            $total_skor = array_sum($skor_alternatif);


            // Simpan total skor ke tabel rekomendasis
            if (!Rekomendasi::where('mahasiswa_id', $mahasiswa_id)->exists()) {
                Rekomendasi::create([
                    'mahasiswa_id' => $mahasiswa_id,
                    'total_skor' => $total_skor,
                ]);
            } else {
                Rekomendasi::where('mahasiswa_id', $mahasiswa_id)->update([
                    'total_skor' => $total_skor,
                ]);
            }
        }

        // Ambil semua rekomendasi
        $rekomendasi = Rekomendasi::all();

        // Kembalikan rekomendasi
        return $rekomendasi;
    }

    function rekomendasikerja()
    {
        // Ambil data dari tabel `Kriterias`, `Subcriterias`, dan `Nilai Mahasiswas`

        $nilai_pekerjaan = NilaiPekerjaan::all();
        $tabel_rekomendasi = Alternatif::all()->first();
        // Urutkan nilai mahasiswa berdasarkan mahasiswa ID
        $nilai_pekerjaan = $nilai_pekerjaan->groupBy('pekerjaan_id');

        // Hitung skor positif dan skor negatif untuk masing-masing alternatif
        foreach ($nilai_pekerjaan as $pekerjaan_id => $nilai) {
            $skor_positif = [];
            $skor_negatif = [];
            // $pekerjaan_id = $nilai_pekerjaan->pluck('pekerjaan_id')->first();
            foreach ($nilai as $nilai_individu) {
                // Ambil nilai subcriteria dari database
                $subcriteria = Subcriteria::where('id', $nilai_individu->subcriteria_id)->first();
                $kriteria = Kriteria::where('id', $nilai_individu->kriteria_id)->first();
                $nilai_subcriteria = $nilai_individu->nilai;
                $bobot_kriteria = $kriteria->bobot;
                $bobot_subcriteria = $subcriteria->bobot;

                $skor_positif[] += pow($nilai_subcriteria * $bobot_kriteria * $bobot_subcriteria, 2);
                $skor_negatif[] += pow($nilai_subcriteria * -1 * $bobot_kriteria * $bobot_subcriteria, 2);
            }

            // Hitung skor alternatif untuk masing-masing alternatif
            $skor_alternatif = array_map(function ($skor_positif, $skor_negatif) {
                return sqrt($skor_positif) / (sqrt($skor_positif) + sqrt($skor_negatif));
            }, $skor_positif, $skor_negatif);


            // Hitung total skor untuk masing-masing mahasiswa
            $total_skor = array_sum($skor_alternatif);


            // Simpan total skor ke tabel rekomendasis
            if (!Alternatif::where('pekerjaan_id', $pekerjaan_id)->exists()) {
                Alternatif::create([
                    'pekerjaan_id' => $pekerjaan_id,
                    'total_skor' => $total_skor,
                ]);
            } else {
                Alternatif::where('pekerjaan_id', $pekerjaan_id)->update([
                    'total_skor' => $total_skor,
                ]);
            }
        }

        // Ambil semua rekomendasi
        $alternatif = Alternatif::all();

        // Kembalikan rekomendasi
        return $alternatif;
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
    public function show()
    {
        $rekomendasis = Rekomendasi::where('mahasiswa_id', Auth::user()->id)->get();
        $alternatifs = Alternatif::all();
        return view('rekomendasi.show', compact('rekomendasis', 'alternatifs'));
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
