<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use Illuminate\Http\Request;

class KbController extends Controller
{
    public function index()
    {
        return view('obat.kb', [
            'title' => 'Manajemen Kb',
            'breadcumb' => ['Manajemen Obat', 'Kb'],
            'kbs' => Kb::all(),
        ]);
    }

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

    public function destroy(Kb $kb)
    {
        $kb->delete();
        return back()->with('success', 'Berhasil menghapus data kb');
    }
}
