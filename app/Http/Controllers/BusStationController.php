<?php

namespace App\Http\Controllers;

use App\BusStation;
use Illuminate\Http\Request;

class BusStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = BusStation::with("BusRoutes", "Routes.Places", "Routes.Places.images")->get();
        return response()->json($stations);
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

        $station = new BusStation();
        $station->name = $input->name;
        $station->x = $input->x;
        $station->y = $input->y;
        $station->save();

        $station->rotues()->sync($input->routes);
        $station->save();

        return response()->json($station);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stations = BusStation::with("BusRoutes", "Routes.Places", "Routes.Places.images")->where('id', $id)->first();
        return response()->json($stations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $station = BusStation::find($id);

        $station->name = $input->name;
        $station->x = $input->x;
        $station->y = $input->y;
        $station->save();

        $station->rotues()->sync($input->routes);
        $station->save();

        return response()->json($station);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = BusStation::destroy($id);
        return response()->json($station);
    }
}
