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
  /**
  * @api {get} /places 1. Get List of Places
  * @apiName GetPlaces
  * @apiGroup Place
  *
  * @apiSuccess {Number} id Place unique ID.
  * @apiSuccess {String} name Name of the Place.
  * @apiSuccess {String} description  Description of the Place.
  * @apiSuccess {Number} x  Lat of the Place.
  * @apiSuccess {Number} y  Lng of the Place.
  * @apiSuccess {String} contact  Contact of the Place.
  * @apiSuccess {String} website  Website of the Place.
  * @apiSuccess {String} type  Type of the Place.
  * @apiSuccess {String} created_at  Datetime of place created.
  * @apiSuccess {String} updated_at  Datetime of place updated.
  * @apiSuccessExample {json} Success-Response:
  *     HTTP/1.1 200 OK
  *     [
  *        { ... },
  *        ....
  *     ]
  */
  public function index()
  {
    $places = Place::with("images", "BusRoute")->get();
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
  /**
  * @api {post} /places Store Place Information
  * @apiName PostPlace
  * @apiGroup Place
  *
  * @apiParam {String} name Name of the Place.
  * @apiParam {String} description  Description of the Place.
  * @apiParam {Number} x  Lat of the Place.
  * @apiParam {Number} y  Lng of the Place.
  * @apiParam {String} contact  Contact of the Place.
  * @apiParam {String} website  Website of the Place.
  * @apiParam {String} type  Type of the Place.
  *
  * @apiSuccess {Number} id Place unique ID.
  * @apiSuccess {String} name Name of the Place.
  * @apiSuccess {String} description  Description of the Place.
  * @apiSuccess {Number} x  Lat of the Place.
  * @apiSuccess {Number} y  Lng of the Place.
  * @apiSuccess {String} contact  Contact of the Place.
  * @apiSuccess {String} website  Website of the Place.
  * @apiSuccess {String} type  Type of the Place.
  * @apiSuccess {String} created_at  Datetime of place created.
  * @apiSuccess {String} updated_at  Datetime of place updated.
  * @apiSuccessExample {json} Success-Response:
  *     HTTP/1.1 200 OK
  *     { ... }
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

      if(isset($request->images)) {
        $images = $request->images;
        foreach ($images as $imageId) {
          $image = Image::find($imageId);
          $image->place_id = $place->id;
          $image->save();
        }
      }

      $place::with("images")->get();
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
  /**
  * @api {get} /places/:id Get Place Information
  * @apiName GetPlace
  * @apiGroup Place
  *
  * @apiParam {Number} id Place unique ID.
  *
  * @apiSuccess {Number} id Place unique ID.
  * @apiSuccess {String} name Name of the Place.
  * @apiSuccess {String} description  Description of the Place.
  * @apiSuccess {Number} x  Lat of the Place.
  * @apiSuccess {Number} y  Lng of the Place.
  * @apiSuccess {String} contact  Contact of the Place.
  * @apiSuccess {String} website  Website of the Place.
  * @apiSuccess {String} type  Type of the Place.
  * @apiSuccess {String} created_at  Datetime of place created.
  * @apiSuccess {String} updated_at  Datetime of place updated.
  * @apiSuccessExample {json} Success-Response:
  *     HTTP/1.1 200 OK
  *     { ... }
  */
  public function show($id)
  {
    // $place = Place::find($id);
    $place = Place::with("images")->where('id', $id)->first();
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
  /**
  * @api {put} /places/:id Update Place Information
  * @apiName PutPlace
  * @apiGroup Place
  *
  * @apiParam {Number} id Place unique ID.
  * @apiParam {String} name Name of the Place.
  * @apiParam {String} description  Description of the Place.
  * @apiParam {Number} x  Lat of the Place.
  * @apiParam {Number} y  Lng of the Place.
  * @apiParam {String} contact  Contact of the Place.
  * @apiParam {String} website  Website of the Place.
  * @apiParam {String} type  Type of the Place.
  *
  * @apiSuccess {Number} id Place unique ID.
  * @apiSuccess {String} name Name of the Place.
  * @apiSuccess {String} description  Description of the Place.
  * @apiSuccess {Number} x  Lat of the Place.
  * @apiSuccess {Number} y  Lng of the Place.
  * @apiSuccess {String} contact  Contact of the Place.
  * @apiSuccess {String} website  Website of the Place.
  * @apiSuccess {String} type  Type of the Place.
  * @apiSuccess {String} created_at  Datetime of place created.
  * @apiSuccess {String} updated_at  Datetime of place updated.
  * @apiSuccessExample {json} Success-Response:
  *     HTTP/1.1 200 OK
  *     { ... }
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
  /**
  * @api {delete} /places/:id Delete Place Information
  * @apiName DeletePlace
  * @apiGroup Place
  *
  * @apiParam {Number} id Place unique ID.
  *
  * @apiSuccess {Number} id Place unique ID.
  * @apiSuccess {String} name Name of the Place.
  * @apiSuccess {String} description  Description of the Place.
  * @apiSuccess {Number} x  Lat of the Place.
  * @apiSuccess {Number} y  Lng of the Place.
  * @apiSuccess {String} contact  Contact of the Place.
  * @apiSuccess {String} website  Website of the Place.
  * @apiSuccess {String} type  Type of the Place.
  * @apiSuccess {String} created_at  Datetime of place created.
  * @apiSuccess {String} updated_at  Datetime of place updated.
  * @apiSuccessExample {json} Success-Response:
  *     HTTP/1.1 200 OK
  *     { ... }
  */
  public function destroy($id)
  {
    $place = Place::destroy($id);
    return response()->json($place);
  }
}
