<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function getPosyandu(Posyandu $posyandu)
    {
        return response()->json($posyandu);
    }
}
