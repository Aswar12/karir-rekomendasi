<?php

namespace App\Http\Controllers;

use App\Models\NilaiMahasiswa;
use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiMahasiswa = NilaiMahasiswa::paginate(10);
        return view('nilaiMahasiswa.index', compact('nilaiMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nilaiMahasiswa = NilaiMahasiswa::all();
        return view('nilaiMahasiswa.create', compact('nilaiMahasiswa'));
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