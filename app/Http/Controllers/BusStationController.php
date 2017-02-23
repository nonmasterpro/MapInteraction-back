<?php

namespace App\Http\Controllers;

use App\BusStation;
use App\BusRoute;
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
        $stations = BusStation::with("BusRoutes", "BusRoutes.Places", "BusRoutes.Places.images")->get();
        return response()->json($stations);
    }

    public function byRoutes($ids) {
        $ids = explode(",", $ids);
        $stations = array();
        foreach($ids as $id) {
            $route = BusRoute::with("Places.images", "Places", "BusStations")->where('id', $id)->first();
            if(!is_null($route['BusStations'])) {
                $stations += $route['BusStations']->toArray();
            }
        }
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
        $station->name = $request->name;
        $station->x = $request->x;
        $station->y = $request->y;
        $station->save();

        $station->BusRoutes()->sync($request->routes);
        $station->save();

        $station = $station::with("BusRoutes", "BusRoutes.Places", "BusRoutes.Places.images")->get();
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
        $stations = BusStation::with("BusRoutes", "BusRoutes.Places", "BusRoutes.Places.images")->where('id', $id)->first();
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

        $station->name = $request->name;
        $station->x = $request->x;
        $station->y = $request->y;
        $station->save();

        $station->BusRoutes()->sync($request->routes);
        $station->save();

        $station = $station::with("BusRoutes", "BusRoutes.Places", "BusRoutes.Places.images")->get();
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
