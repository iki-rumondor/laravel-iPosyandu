<?php

namespace App\Http\Controllers\Api;

use App\Models\Peserta;
use App\Http\Controllers\Controller;
use App\Http\Resources\PesertaResource;

class ApiPesertaController extends Controller
{
    public function index()
    {
        return PesertaResource::collection(Peserta::all());
    }

    public function show(Peserta $peserta)
    {
        return PesertaResource::make($peserta);
    }

}
