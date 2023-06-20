<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{

    public function index()
    {
        return view('obat.imunisasi', [
            'title' => 'Manajemen Imunisasi',
            'breadcumb' => ['Manajemen Obat', 'Imunisasi'],
            'imunisasis' => Imunisasi::all(),
        ]);
    }

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

    public function destroy(Imunisasi $imunisasi)
    {
        $imunisasi->delete();

        return back()->with('success', 'Berhasil menghapus data imunisasi');
    }
}
