<?php

namespace App\Http\Controllers;

use App\BusStation;
use App\BusRoute;
use Illuminate\Http\Request;

class BusRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = BusRoute::with("Places.images", "Places", "BusStations")->get();
        return response()->json($route);
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

        $route = new BusRoute();
        $route->name = $request->name;
        $route->save();

        $route->BusStations()->sync($request->stations);
        $route->places()->sync($request->places);
        $route->save();

        $route::with("Places.images", "Places", "BusStations")->get();
        return response()->json($route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = BusRoute::with("Places.images", "Places", "BusStations")->where('id', $id)->first();
        return response()->json($route);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $route = BusRoute::find($id);

        $route->name = $request->name;
        $route->save();

        $route->BusStations()->sync($request->stations);
        $route->places()->sync($request->places);
        $route->save();

        $route::with("Places.images", "Places", "BusStations")->get();
        return response()->json($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = BusRoute::destroy($id);
        return response()->json($route);
    }
}
