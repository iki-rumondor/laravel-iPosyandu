<?php

namespace App\Http\Controllers;

use App\Models\Kader;
use App\Models\Posyandu;
use App\Models\Schedule;
use App\Models\Vitamin;
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
    
    public function getVitamin(Vitamin $vitamin)
    {
        return response()->json($vitamin);
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
