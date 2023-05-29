<?php

namespace App\Http\Controllers\Api;

use App\Models\Schedule;
use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;

class ApiScheduleController extends Controller
{
    public function index()
    {
        return ScheduleResource::collection(Schedule::all());
    }

    public function show(Schedule $schedule)
    {
        return ScheduleResource::make($schedule);
    }

}
