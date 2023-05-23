<?php

namespace App\Http\Controllers;

use App\Models\Kader;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class DataKaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kader.data.index', [
            'title' => 'Kader Posyandu',
            'breadcumb' => ['Manajemen Kader', 'Data Kader'],
            'kader' => Kader::all(),
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

        Kader::create($validatedData);

        return back()->with('success', 'Berhasil menambah data kader');
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
    public function update(Request $request, Kader $data)
    {
        
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'name' => 'required',
        ]);

        $data->update($validatedData);

        return back()->with('success', 'Berhasil mengubah data kader');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kader $data)
    {
        $data->delete();
        return back()->with('success', 'Berhasil menghapus data kader');
    }
}
