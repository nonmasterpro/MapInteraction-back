<?php

namespace App\Http\Controllers;

use App\Place;
use App\Image;
use App\User;
use App\BusStation;
use App\BusRoute;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    function reset() {
        Place::query()->truncate();
        Image::query()->truncate();
        User::query()->truncate();
        BusStation::query()->truncate();
        BusRoute::query()->truncate();

        $admin = new User();
        $admin->name = 'Teerapong Boonmark';
        $admin->email = 'non@non.com';
        $admin->password = bcrypt('123456');
        $admin->roleName = 'admin';
        $admin->save();

        $station = new BusStation();
        $station->name = 'XYZ station';
        $station->x = 13.13;
        $station->y = 14.15;
        $station->save();

        $route = new BusRoute();
        $route->name = 'XYZ route';
        $route->bus_station_id = $station->id;
        $route->save();

        $place = new Place();
        $place->name = 'name';
        $place->description = 'description';
        $place->x = 37.773972;
        $place->y = -122.431297;
        $place->contact = 'non@non.com';
        $place->website = 'non.com';
        $place->type = 'x';
        $place->bus_route_id = $route->id;
        $place->save();

        $image1 = new Image();
        $image1->fileName = '1486475349.png';
        $image1->place_id = $place->id;
        $image1->save();

        $image2 = new Image();
        $image2->fileName = '1487004138.png';
        $image2->place_id = $place->id;
        $image2->save();
    }
}
