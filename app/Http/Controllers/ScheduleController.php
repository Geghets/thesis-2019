<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function show()
    {
        return view('layouts.schedule');
    }

    public function index()
    {
        $schedules = Schedule::all();

        return view("layouts.schedule", compact('schedules'));
    }
}
