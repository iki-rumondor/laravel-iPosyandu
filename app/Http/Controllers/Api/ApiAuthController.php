<?php

namespace App\Http\Controllers\Api;

use App\Models\MobileUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'no_telp' => 'required',
            'password' => 'required',
        ]);

        $user = MobileUser::where('no_telp', $request->no_telp)->first();
        if($user->status == 'peserta'){
            $nama = $user->peserta->nama;
        }else{
            $nama = $user->kader->nama;
        }

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'no_telp' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        $token =  $user->createToken('user login')->plainTextToken;
        return [
            'nama' => $nama,
            'token' => $token
        ];
    }
}
