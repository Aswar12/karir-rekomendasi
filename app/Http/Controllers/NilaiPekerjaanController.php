<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\NilaiPekerjaan;
use App\Models\Pekerjaan;
use App\Models\Subcriteria;
use Illuminate\Http\Request;


class NilaiPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiPekerjaan = NilaiPekerjaan::all();
        return view('nilaiPekerjaan.index', compact('nilaiPekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        $kriteriaList = Kriteria::all();
        $SubcriteriaList = Subcriteria::all();

        return view('nilaipekerjaan.create', compact('pekerjaan', 'kriteriaList', 'SubcriteriaList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,  string $id)
    {
        $request->validate([

            'kriteria_id' => 'required', // tambahkan 'subcriteria_id
            'nilai' => 'required',
        ]);

        if ($request->subcriteria_id == null) {
            $sub_id = null;
        } else {
            $sub_id = $request->subcriteria_id;
        }

        NilaiPekerjaan::create([
            'pekerjaan_id' => $id,
            'kriteria_id' => $request->kriteria_id,
            'subcriteria_id' => $sub_id, // tambahkan 'subcriteria_id
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('nilaiPekerjaan.index')->with('success', 'Nilai Pekerjaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nilaiPekerjaan = NilaiPekerjaan::where('pekerjaan_id', $id)->get();
        $pekerjaan = Pekerjaan::findOrFail($id);
        $nilais = NilaiPekerjaan::with(['kriteria', 'subcriteria'])->where('pekerjaan_id', $id)->get();
        return view('nilaiPekerjaan.show', compact('nilais', 'pekerjaan', 'nilaiPekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nilaiPekerjaan = NilaiPekerjaan::findOrFail($id);
        $pekerjaanList = Pekerjaan::all();
        $kriteriaList = Kriteria::all();
        $subcriteriaList = Subcriteria::all();
        return view('nilaiPekerjaan.edit', compact('nilaiPekerjaan', 'pekerjaanList', 'kriteriaList', 'subcriteriaList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pekerjaan_id' => 'required',
            'kriteria_id' => 'required',
            'subcriteria_id' => 'required',
            'nilai' => 'required',
        ]);

        $nilaiPekerjaan = NilaiPekerjaan::findOrFail($id);

        // Menggunakan update bukan create
        $nilaiPekerjaan->update([
            'Pekerjaan_id' => $request->Pekerjaan_id,
            'kriteria_id' => $request->kriteria_id,
            'subcriteria_id' => $request->subcriteria_id,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('nilaiPekerjaan.index')->with('success', 'Nilai Pekerjaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilaiPekerjaan = NilaiPekerjaan::findOrFail($id);
        $nilaiPekerjaan->delete();
        return redirect()->route('nilaiPekerjaan.index')->with('success', 'Item berhasil dihapus');
    }
}
