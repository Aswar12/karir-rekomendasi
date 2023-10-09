<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\NilaiMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiMahasiswa = NilaiMahasiswa::all();
        return view('nilaiMahasiswa.index', compact('nilaiMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Anda mungkin perlu mengirimkan data mahasiswa dan kriteria ke tampilan
        $mahasiswaList = User::where('role', 'mahasiswa')->get();
        $kriteriaList = Kriteria::all();

        return view('nilaiMahasiswa.create', compact('mahasiswaList', 'kriteriaList'));
    }

    // Simpan data dari formulir ke database
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'kriteria_id' => 'required',
            'nilai' => 'required',
        ]);

        NilaiMahasiswa::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'kriteria_id' => $request->kriteria_id,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('nilaiMahasiswa.create')->with('success', 'Nilai Mahasiswa berhasil ditambahkan.');
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
        $nilaiMahasiswa = NilaiMahasiswa::findOrFail($id);
        return view('nilaiMahasiswa.edit', compact('nilaiMahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nilaiMahasiswa = NilaiMahasiswa::findOrFail($id);
        $nilaiMahasiswa->update($request->all());
        return redirect()->route('nilaiMahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilaiMahasiswa = NilaiMahasiswa::findOrFail($id);
        $nilaiMahasiswa->delete();
        return redirect()->route('nilaiMahasiswa.index')->with('success', 'Item berhasil dihapus');
    }
}
