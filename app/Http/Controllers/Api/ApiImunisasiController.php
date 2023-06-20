<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ImunisasiResource;
use App\Models\Imunisasi;

class ApiImunisasiController extends Controller
{
    public function index()
    {
        return ImunisasiResource::collection(Imunisasi::all());
    }

    public function show(Imunisasi $imunisasi)
    {
        return ImunisasiResource::make($imunisasi);
    }
}
