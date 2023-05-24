<?php

namespace App\Http\Controllers;

use App\Models\Kader;
use App\Models\Peserta;
use App\Models\Posyandu;
use App\Models\Schedule;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function getPosyandu(Posyandu $posyandu)
    {
        return response()->json($posyandu);
    }

    public function getKader(Kader $kader)
    {
        return response()->json($kader);
    }

    public function getPeserta(Peserta $peserta)
    {
        return response()->json($peserta);
    }

    public function getSchedule(Schedule $schedule)
    {
        // $schedule['posyandu'] = $schedule->posyandu;

        return response()->json($schedule);
    }

    public function setSchedulesTable(Posyandu $posyandu)
    {
        return response(view('fetching.schedules_tbody', [
            'posyandu' => $posyandu,
            'schedules' => $posyandu->schedules,
        ]));
    }
}
