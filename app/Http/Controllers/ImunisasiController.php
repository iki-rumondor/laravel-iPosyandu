<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('obat.imunisasi', [
            'title' => 'Manajemen Imunisasi',
            'breadcumb' => ['Manajemen Obat', 'Imunisasi'],
            'imunisasis' => Imunisasi::all(),
        ]);
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
        $validatedData = $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required|integer|min:1',
        ]);

        Imunisasi::create($validatedData);

        return back()->with('success', 'Berhasil menambah data imunisasi');
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
    public function update(Request $request, Imunisasi $imunisasi)
    {
        $validatedData = $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required|integer|min:1',
        ]);

        $imunisasi->update($validatedData);

        return back()->with('success', 'Berhasil mengubah data imunisasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imunisasi $imunisasi)
    {
        $imunisasi->delete();

        return back()->with('success', 'Berhasil menghapus data imunisasi');
    }
}
