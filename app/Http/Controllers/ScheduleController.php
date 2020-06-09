<?php

namespace App\Http\Controllers;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return Schedule::all();
    }
 
    public function show(Schedule $schedule)
    {
        return $schedule;
    }

    public function store(Request $request)
    {
        $schedule =  Schedule::create($request->all());
        return response()->json($schedule, 201);
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update($request->all());
        return response()->json($schedule, 200);
    }

    public function delete(Request $request, Schedule $schedule)
    {
        $schedule->delete();
        return response()->json(null, 204);
    }
}
