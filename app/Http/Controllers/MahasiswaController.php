<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Builder\Use_;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = User::all()->where('roles', 'mahasiswa');
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
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
        // $mahasiswas = User::findOrFail($id);
        // return view('mahasiswa.edit', compact('mahasiswas'));
        $mahasiswas = User::findOrFail($id);
      
        return view('mahasiswa.edit', compact('mahasiswas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'tahun_masuk' => 'required',
        ]);
    
        $mahasiswas = User::findOrFail($id);
    
        // Menggunakan update bukan create
        $mahasiswas->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'tahun_masuk' => $request->tahun_masuk,
        ]);
        
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa berhasil diupdate');
    }
    



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}