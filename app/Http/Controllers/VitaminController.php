<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Vitamin;
use Illuminate\Http\Request;

class VitaminController extends Controller
{

    public function index()
    {
        return view('obat.vitamin', [
            'title' => 'Manajemen Vitamin',
            'breadcumb' => ['Manajemen Obat', 'Vitamin'],
            'vitamins' => Vitamin::all(),
            'ages' => Age::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'usia_id' => 'required',
            'nama' => 'required',
            'stok' => 'required|min:1',
        ]);

        Vitamin::create($validatedData);

        return back()->with('success', 'Berhasil menambah data vitamin');
    }

    public function update(Request $request, Vitamin $vitamin)
    {
        $validatedData = $this->validate($request, [
            'usia_id' => 'required',
            'nama' => 'required',
            'stok' => 'required|min:1',
        ]);

        $vitamin->update($validatedData);

        return back()->with('success', 'Berhasil mengubah data vitamin');
    }

    public function destroy(Vitamin $vitamin)
    {
        $vitamin->delete();

        return back()->with('success', 'Berhasil menghapus data vitamin');
    }
}
