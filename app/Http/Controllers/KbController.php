<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use Illuminate\Http\Request;

class KbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('obat.kb', [
            'title' => 'Manajemen Kb',
            'breadcumb' => ['Manajemen Obat', 'Kb'],
            'kbs' => Kb::all(),
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
            'stok' => 'required|min:1',
        ]);

        Kb::create($validatedData);
        return back()->with('success', 'Berhasil menambah data kb');
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
    public function update(Request $request, Kb $kb)
    {
        $validatedData = $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required|min:1',
        ]);

        $kb->update($validatedData);

        return back()->with('success', 'Berhasil mengubah data kb');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kb $kb)
    {
        $kb->delete();
        return back()->with('success', 'Berhasil menghapus data kb');
    }
}
