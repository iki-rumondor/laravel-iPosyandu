<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posyandu.location.index', [
            'title' => 'Penempatan Lokasi Posyandu',
            'breadcumb' => ['Manajemen Posyandu', 'Input Lokasi'],
            'posyandu' => Posyandu::all(),
            'desa' => Desa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'nama' => 'required',
            'desa_id' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Posyandu::create($validatedData);

        return back()->with('success', 'Berhasil menambah data posyandu');
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
    public function update(Request $request, Posyandu $location)
    {
        
        $validatedData = $this->validate($request, [
            'nama' => 'required',
            'desa_id' => 'required',
        ]);

        $location->update($validatedData);

        return back()->with('success', 'Berhasil merubah data posyandu');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posyandu $location)
    {
        $location->delete();
        return back()->with('success', 'Berhasil menghapus data posyandu');
    }
}
