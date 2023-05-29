<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KbResource;
use App\Models\Kb;

class ApiKbController extends Controller
{
    public function index()
    {
        return KbResource::collection(Kb::all());
    }

    public function show(Kb $kb)
    {
        return KbResource::make($kb);
    }
}
