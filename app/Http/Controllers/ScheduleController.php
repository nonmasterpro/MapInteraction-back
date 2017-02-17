<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::with("Place", "User")->get();
        return response()->json($schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $schedule = new Schedule();
        $schedule->courseName = $input->courseName;
        $schedule->day = $input->day;
        $schedule->start = $input->start;
        $schedule->end = $input->end;
        $schedule->user_id = $input->userId;
        $schedule->place_id = $input->placeId;
        $schedule->save();

        return response()->json($schedule);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::with("Place", "User")->where('id', $id)->first();
        return response()->json($schedule);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $input = $request->all();
        $schedule = Schedule::find($id);

        $schedule = new Schedule();
        $schedule->courseName = $input->courseName;
        $schedule->day = $input->day;
        $schedule->start = $input->start;
        $schedule->end = $input->end;
        $schedule->user_id = $input->userId;
        $schedule->place_id = $input->placeId;
        $schedule->save();

        return response()->json($schedule);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $schedule = Schedule::destroy($id);
        return response()->json($schedule);
    }
}
