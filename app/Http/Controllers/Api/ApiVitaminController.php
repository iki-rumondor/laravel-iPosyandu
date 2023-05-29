<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VitaminResource;
use App\Models\Vitamin;

class ApiVitaminController extends Controller
{
    public function index()
    {
        return VitaminResource::collection(Vitamin::all());
    }

    public function show(Vitamin $vitamin)
    {
        return VitaminResource::make($vitamin);
    }
}
