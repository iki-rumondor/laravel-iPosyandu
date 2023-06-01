<?php

namespace App\Http\Controllers\Api;

use App\Models\Posyandu;
use App\Http\Controllers\Controller;
use App\Http\Resources\PosyanduResource;

class ApiPosyanduController extends Controller
{
    public function index()
    {
        return PosyanduResource::collection(Posyandu::all());
    }

    public function show(Posyandu $posyandu)
    {
        return PosyanduResource::make($posyandu);
    }

}
