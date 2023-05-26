<?php

namespace App\Http\Controllers;

use App\Models\Vitamin;
use Illuminate\Http\Request;

class VitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('obat.vitamin', [
            'title' => 'Manajemen Vitamin',
            'breadcumb' => ['Manajemen Obat', 'Vitamin'],
            'vitamins' => Vitamin::all(),
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
            'name' => 'required',
            'stock' => 'required|min:1',
        ]);

        Vitamin::create($validatedData);

        return back()->with('success', 'Berhasil menambah data vitamin');
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
    public function update(Request $request, Vitamin $vitamin)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required',
            'stock' => 'required|min:1',
        ]);

        $vitamin->update($validatedData);

        return back()->with('success', 'Berhasil mengubah data vitamin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vitamin $vitamin)
    {
        $vitamin->delete();

        return back()->with('success', 'Berhasil menghapus data vitamin');
    }
}
