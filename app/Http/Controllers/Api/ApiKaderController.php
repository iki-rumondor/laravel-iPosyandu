<?php

namespace App\Http\Controllers\Api;

use App\Models\Kader;
use App\Http\Controllers\Controller;
use App\Http\Resources\KaderResource;

class ApiKaderController extends Controller
{
    public function index()
    {
        return KaderResource::collection(Kader::all());
    }

    public function show(Kader $peserta)
    {
        return KaderResource::make($peserta);
    }

}
