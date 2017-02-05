<?php

namespace App\Http\Controllers;

use App\Place;
use App\Image;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $places = Place::with("images")->get();
        return response()->json($places);
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
        $place = new Place();
        
        if ($place->validate($input)) {
            $place->name = $request->name;
            $place->description = $request->description;
            $place->x = $request->x;
            $place->y = $request->y;
            $place->contact = $request->contact;
            $place->website = $request->website;
            $place->type = $request->type;

            $place->save();

            return response()->json($place);
        } else {
            $errors = $place->errors();
            return response()->json($errors);
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $place = Place::find($id);
        $place = $place::with("images")->get();
        return response()->json($place);
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
        $place = Place::find($id);
        
        if ($place->validate($input)) {
            $place->name = $request->name;
            $place->description = $request->description;
            $place->x = $request->x;
            $place->y = $request->y;
            $place->contact = $request->contact;
            $place->website = $request->website;
            $place->type = $request->type;

            $place->save();

            return response()->json($place);
        } else {
            $errors = $place->errors();
            return response()->json($errors);
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $place = User::find($id);
        $place->delete();
    }
}