<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peserta;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function index()
    {
        return \view('peserta.index', [
            'title' => 'Manajemen Peserta',
            'breadcumb' => ['Manajemen Peserta', 'Data Peserta'],
            'peserta' => Peserta::all(),
            'posyandu' => Posyandu::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|unique:pesertas',
        ]);

        $password = \bcrypt(\str_replace('-', '', $request->tanggal_lahir));
        $user =  User::create([
            'name' => $request->nama,
            'password' => $password,
        ]);

        $validatedData['user_id'] = $user->id;
        Peserta::create($validatedData);

        return back()->with('success', 'Berhasil menambah data peserta');
    }

    public function update(Request $request, Peserta $data)
    {
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $data->update($validatedData);
        return back()->with('success', 'Berhasil mengubah data peserta');
    }

    public function destroy(Peserta $data)
    {
        $data->delete();
        return back()->with('success', 'Berhasil menghapus data peserta');
    }
}
