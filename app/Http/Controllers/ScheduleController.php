<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posyandu.schedule.index', [
            'title' => 'Penjadwalan Posyandu',
            'breadcumb' => ['Manajemen Posyandu', 'Penjadwalan'],
            'posyandu' => Posyandu::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'posyandu_id' => 'required',
            'date' => 'required',
        ]);

        $validatedData['status'] = 'Terjadwal';

        Schedule::create($validatedData);

        return back()->with('success', 'Berhasil menambah data posyandu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return back()->with('success', 'Berhasil menghapus jadwal posyandu');
    }
}