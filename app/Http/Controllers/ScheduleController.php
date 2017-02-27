<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\User;
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
        $schedule->courseName = $request->courseName;
        $schedule->day = $request->day;
        $schedule->start = $request->start;
        $schedule->end = $request->end;
        $schedule->user_id = $request->userId;
        $schedule->place_id = $request->placeId;
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

    public function getScheduleByUser($id)
    {
        $user = User::with("Schedules")->where('id', $id)->first();
        return response()->json($user->schedules);
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

        $schedule->courseName = $request->courseName;
        $schedule->day = $request->day;
        $schedule->start = $request->start;
        $schedule->end = $request->end;
        $schedule->user_id = $request->userId;
        $schedule->place_id = $request->placeId;
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
