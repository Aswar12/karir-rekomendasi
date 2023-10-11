<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Subcriteria;
use Illuminate\Http\Request;


class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kriterias = Kriteria::with('subcriteria')->get();
        return view('kriteria.index', compact('kriterias'));

        printf($kriterias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriterias = Kriteria::all();
        return view('kriteria.create', compact('kriterias'));
    }
    public function createSub($id)
    {
        $kriterias = Kriteria::findOrFail($id);
        return view('kriteria.create-sub', compact('kriterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSub(Request $request, $id)
    {
        $request->validate([
            'nama_subkriteria' => 'required',
            'bobot' => 'required',
        ]);
        $data = $request->all();
        $data['id_kriteria'] = $id;
        Subcriteria::create($data);
        return redirect()->route('kriterias.index');
    }
    public function store(Request $request)
    {
        Kriteria::create($request->all());
        return redirect()->route('kriterias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $kriterias)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriterias = Kriteria::findOrFail($id);
        return view('kriteria.edit', compact('kriterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $kriterias = Kriteria::findOrFail($id);
        // $kriterias->update($request->all());
        // return redirect()->route('kriterias.index');
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot' => 'required',

        ]);

        $kriterias = Kriteria::findOrFail($id);

        // Menggunakan update bukan create
        $kriterias->update([
            'nama_kriteria' => $request->nama_kriteria,
            'bobot' => $request->bobot,
        ]);

        return redirect()->route('kriterias.index')
            ->with('success', 'Mahasiswa berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kriterias = Kriteria::findOrFail($id);
        $kriterias->delete();
        return redirect()->route('kriterias.index')->with('success', 'Item berhasil dihapus');
    }
}
