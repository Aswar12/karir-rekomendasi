<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pekerjaans =  Pekerjaan::all();
        return view('pekerjaan.index', compact('pekerjaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pekerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pekerjaan::create($request->all());
        return redirect()->route('pekerjaan.index');
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
        $pekerjaans  = Pekerjaan::findOrFail($id);
        return view('pekerjaan.edit', compact('pekerjaans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_pekerjaan' => 'required',

        ]);

        $pekerjaans = Pekerjaan::findOrFail($id);

        // Menggunakan update bukan create
        $pekerjaans->update([
            'name_pekerjaan' => $request->name_pekerjaan,

        ]);

        return redirect()->route('pekerjaan.index')
            ->with('success', 'Mahasiswa berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pekerjaans = Pekerjaan::findorfail($id);
        $pekerjaans->delete();
        return redirect()->route('pekerjaan.index');
    }
}
