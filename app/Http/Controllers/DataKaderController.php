<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kader;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class DataKaderController extends Controller
{
    public function index()
    {
        return view('kader.data.index', [
            'title' => 'Kader Posyandu',
            'breadcumb' => ['Manajemen Kader', 'Data Kader'],
            'kader' => Kader::all(),
            'posyandu' => Posyandu::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|unique:kaders',
        ]);

        $password = \bcrypt(\str_replace('-', '', $request->tanggal_lahir));
        $user =  User::create([
            'name' => $request->nama,
            'password' => $password,
        ]);

        $validatedData['user_id'] = $user->id;

        Kader::create($validatedData);

        return back()->with('success', 'Berhasil menambah data kader');
    }

    public function update(Request $request, Kader $data)
    {
        
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $data->update($validatedData);

        return back()->with('success', 'Berhasil mengubah data kader');
        
    }

    public function destroy(Kader $data)
    {
        $data->delete();
        return back()->with('success', 'Berhasil menghapus data kader');
    }
}
