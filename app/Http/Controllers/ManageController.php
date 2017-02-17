<?php

namespace App\Http\Controllers;

use App\Place;
use App\Image;
use App\User;
use App\BusStation;
use App\BusRoute;
use App\Schedule;
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
        Schedule::query()->truncate();

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

        $course1 = new Schedule();
        $course1->courseName = 'COMP PRO';
        $course1->day = 2;
        $course1->start = '08:00:00';
        $course1->end = '9:30:00';
        $course1->user_id = $admin->id;
        $course1->place_id = $place->id;
        $course1->save();

        $course3 = new Schedule();
        $course3->courseName = 'OOP';
        $course3->day = 2;
        $course3->start = '13:00:00';
        $course3->end = '14:30:00';
        $course3->user_id = $admin->id;
        $course3->place_id = $place->id;
        $course3->save();

        $course2 = new Schedule();
        $course2->courseName = 'COMP PRO';
        $course2->day = 4;
        $course2->start = '08:00:00';
        $course2->end = '9:30:00';
        $course2->user_id = $admin->id;
        $course2->place_id = $place->id;
        $course2->save();

        $course4 = new Schedule();
        $course4->courseName = 'OOP';
        $course4->day = 4;
        $course4->start = '13:00:00';
        $course4->end = '14:30:00';
        $course4->user_id = $admin->id;
        $course4->place_id = $place->id;
        $course4->save();
    }
}
