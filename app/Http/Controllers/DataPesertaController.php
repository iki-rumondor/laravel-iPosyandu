<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \view('peserta.index', [
            'title' => 'Manajemen Peserta',
            'breadcumb' => ['Manajemen Peserta', 'Data Peserta'],
            'peserta' => Peserta::all(),
            'posyandu' => Posyandu::all(),
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
            'posyandu_id' => 'required',
            'name' => 'required',
        ]);

        Peserta::create($validatedData);

        return back()->with('success', 'Berhasil menambah data peserta');
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
    public function update(Request $request, Peserta $data)
    {
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'name' => 'required',
        ]);

        $data->update($validatedData);
        return back()->with('success', 'Berhasil mengubah data peserta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $data)
    {
        $data->delete();
        return back()->with('success', 'Berhasil menghapus data peserta');
    }
}
