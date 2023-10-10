<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Subcriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::all();
        $kriteria = Kriteria::with('subcriteria');
        return view('kriteria.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriterias = Kriteria::all();
        return view('kriteria.create', compact('kriterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
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
        $kriterias = Kriteria::findOrFail($id);
        $kriterias->update($request->all());
        return redirect()->route('kriterias.index');
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
