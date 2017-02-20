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
    function resetByName($name) {
        switch ($name) {
            case 'place':
                Place::query()->truncate();
                break;
            case 'image':
                Image::query()->truncate();
                break;
            case 'user':
                User::query()->truncate();
                break;
            case 'busstation':
                BusStation::query()->truncate();
                break;
            case 'busroute':
                BusRoute::query()->truncate();
                break;
            case 'schedule':
                Schedule::query()->truncate();
                break;
        }
    }

    function reset() {
        Place::query()->truncate();
        Image::query()->truncate();
        User::query()->truncate();
        BusStation::query()->truncate();
        BusRoute::query()->truncate();
        Schedule::query()->truncate();
        DB::table('routes_places')->truncate();
        DB::table('routes_stations')->truncate();

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

        $place = new Place();
        $place->name = 'Faculty of Agriculture';
        $place->description = 'Faculty of Agriculture is locate near by Language Institutions(LI)';
        $place->x = 18.793307;
        $place->y = 98.957806;
        $place->contact = 'non@non.com';
        $place->website = 'non.com';
        $place->type = 'building';
        $place->save();

        $route = new BusRoute();
        $route->name = 'XYZ route';
        $route->save();
        $route->BusStations()->attach($station->id);
        $route->Places()->attach($place->id);
        $route->save();

        $image = new Image();
        $image->fileName = '1.jpeg';
        $image->place_id = $place->id;
        $image->save();

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

        ////////////////////////////////////Building///////////////////////////////////////////////

        $place2 = new Place();
        $place2->name = 'Faculty of Dentistry';
        $place2->description = 'Faculty of Dentistry';
        $place2->x = 18.789597;
        $place2->y = 98.968143;
        $place2->contact = 'non@non.com';
        $place2->website = 'non.com';
        $place2->type = 'building';
        $place2->save();

        $image2 = new Image();
        $image2->fileName = '2.jng';
        $image2->place_id = $place2->id;
        $image2->save();

        $place3 = new Place();
        $place3->name = 'Faculty of Associated Medical Science';
        $place3->description = 'Faculty of Associated Medical Science';
        $place3->x = 18.789646;
        $place3->y = 98.975668;
        $place3->contact = 'non@non.com';
        $place3->website = 'non.com';
        $place3->type = 'building';
        $place3->save();

        $image3 = new Image();
        $image3->fileName = '3.jng';
        $image3->place_id = $place3->id;
        $image3->save();

        $place4 = new Place();
        $place4->name = 'Faculty of Business Administration';
        $place4->description = 'Faculty of Business Administration';
        $place4->x = 18.793819;
        $place4->y = 98.956956;
        $place4->contact = 'non@non.com';
        $place4->website = 'non.com';
        $place4->type = 'building';
        $place4->save();

        $image4 = new Image();
        $image4->fileName = '4.jpg';
        $image4->place_id = $place4->id;
        $image4->save();

        $place5 = new Place();
        $place5->name = 'Faculty of Nursing';
        $place5->description = 'Faculty of Nursing';
        $place5->x = 18.789061;
        $place5->y = 98.9762083;
        $place5->contact = 'non@non.com';
        $place5->website = 'non.com';
        $place5->type = 'building';
        $place5->save();

        $image5 = new Image();
        $image5->fileName = '5.jpg';
        $image5->place_id = $place5->id;
        $image5->save();

        $place6 = new Place();
        $place6->name = 'Faculty of Medicine';
        $place6->description = 'Faculty of Medicine';
        $place6->x = 18.790124;
        $place6->y = 98.976833;
        $place6->contact = 'non@non.com';
        $place6->website = 'non.com';
        $place6->type = 'building';
        $place6->save();

        $image6 = new Image();
        $image6->fileName = '6.jpg';
        $image6->place_id = $place6->id;
        $image6->save();

        $place7 = new Place();
        $place7->name = 'Faculty of Pharmacy';
        $place7->description = 'Faculty of Pharmacy';
        $place7->x = 18.790203;
        $place7->y = 98.965313;
        $place7->contact = 'non@non.com';
        $place7->website = 'non.com';
        $place7->type = 'building';
        $place7->save();

        $image7 = new Image();
        $image7->fileName = '7.jpg';
        $image7->place_id = $place7->id;
        $image7->save();

        $place8 = new Place();
        $place8->name = 'Faculty of Humanities';
        $place8->description = 'Faculty of Humanities';
        $place8->x = 18.803409;
        $place8->y = 98.950753;
        $place8->contact = 'non@non.com';
        $place8->website = 'non.com';
        $place8->type = 'building';
        $place8->save();

        $image8 = new Image();
        $image8->fileName = '8.jpg';
        $image8->place_id = $place8->id;
        $image8->save();

        $place9 = new Place();
        $place9->name = 'Faculty of Fine Arts';
        $place9->description = 'Faculty of Fine Arts';
        $place9->x = 18.793173;
        $place9->y = 98.958332;
        $place9->contact = 'non@non.com';
        $place9->website = 'non.com';
        $place9->type = 'building';
        $place9->save();

        $image9 = new Image();
        $image9->fileName = '9.jpg';
        $image9->place_id = $place9->id;
        $image9->save();

        $place10 = new Place();
        $place10->name = 'Faculty of Science';
        $place10->description = 'Faculty of Science';
        $place10->x = 18.801081;
        $place10->y = 98.947030;
        $place10->contact = 'non@non.com';
        $place10->website = 'non.com';
        $place10->type = 'building';
        $place10->save();

        $image10 = new Image();
        $image10->fileName = '10.jpg';
        $image10->place_id = $place10->id;
        $image10->save();

        $place11 = new Place();
        $place11->name = 'Faculty of Engineering';
        $place11->description = 'Faculty of Engineering';
        $place11->x = 18.795442;
        $place11->y = 98.952876;
        $place11->contact = 'non@non.com';
        $place11->website = 'non.com';
        $place11->type = 'building';
        $place11->save();

        $image11 = new Image();
        $image11->fileName = '11.jpg';
        $image11->place_id = $place11->id;
        $image11->save();

        $place12 = new Place();
        $place12->name = 'Faculty of Education';
        $place12->description = 'Faculty of Education';
        $place12->x = 18.793327;
        $place12->y = 98.956409;
        $place12->contact = 'non@non.com';
        $place12->website = 'non.com';
        $place12->type = 'building';
        $place12->save();

        $image12 = new Image();
        $image12->fileName = '12.jpg';
        $image12->place_id = $place12->id;
        $image12->save();

        $place13 = new Place();
        $place13->name = 'Faculty of Economics';
        $place13->description = 'Faculty of Economics';
        $place13->x = 18.801644;
        $place13->y = 98.950999;
        $place13->contact = 'non@non.com';
        $place13->website = 'non.com';
        $place13->type = 'building';
        $place13->save();

        $image13 = new Image();
        $image13->fileName = '13.jpg';
        $image13->place_id = $place13->id;
        $image13->save();

        $place14 = new Place();
        $place14->name = 'Faculty of  Architecture';
        $place14->description = 'Faculty of  Architecture';
        $place14->x = 18.798088;
        $place14->y = 98.949048;
        $place14->contact = 'non@non.com';
        $place14->website = 'non.com';
        $place14->type = 'building';
        $place14->save();

        $image14 = new Image();
        $image14->fileName = '14.jpg';
        $image14->place_id = $place14->id;
        $image14->save();

        $place15 = new Place();
        $place15->name = 'Faculty of Social Sciences';
        $place15->description = 'Faculty of Social Sciences';
        $place15->x = 18.802542;
        $place15->y = 98.950198;
        $place15->contact = 'non@non.com';
        $place15->website = 'non.com';
        $place15->type = 'building';
        $place15->save();

        $image15 = new Image();
        $image15->fileName = '15.jpg';
        $image15->place_id = $place15->id;
        $image15->save();

        $place16 = new Place();
        $place16->name = 'Small Animal Hospital';
        $place16->description = 'Small Animal Hospitaly';
        $place16->x = 18.796052;
        $place16->y = 98.961205;
        $place16->contact = 'non@non.com';
        $place16->website = 'non.com';
        $place16->type = 'building';
        $place16->save();

        $image16 = new Image();
        $image16->fileName = '16.jpg';
        $image16->place_id = $place16->id;
        $image16->save();

        $place17 = new Place();
        $place17->name = 'RB5';
        $place17->description = 'RB5';
        $place17->x = 18.801041;
        $place17->y = 98.952682;
        $place17->contact = 'non@non.com';
        $place17->website = 'non.com';
        $place17->type = 'building';
        $place17->save();

        $image17 = new Image();
        $image17->fileName = '17.jpg';
        $image17->place_id = $place17->id;
        $image17->save();

        $place18 = new Place();
        $place18->name = 'Faculty of Political Science and Public Administration';
        $place18->description = 'Faculty of Political Science and Public Administration';
        $place18->x = 18.803292;
        $place18->y = 98.954680;
        $place18->contact = 'non@non.com';
        $place18->website = 'non.com';
        $place18->type = 'building';
        $place18->save();

        $image18 = new Image();
        $image18->fileName = '18.jpg';
        $image18->place_id = $place18->id;
        $image18->save();

        $place19 = new Place();
        $place19->name = 'Faculty of Law';
        $place19->description = 'Faculty of Law';
        $place19->x = 18.804749;
        $place19->y = 98.948189;
        $place19->contact = 'non@non.com';
        $place19->website = 'non.com';
        $place19->type = 'building';
        $place19->save();

        $image19 = new Image();
        $image19->fileName = '19.jpg';
        $image19->place_id = $place19->id;
        $image19->save();

        $place20 = new Place();
        $place20->name = 'The College of Arts, Media and Technology';
        $place20->description = 'The College of Arts, Media and Technology';
        $place20->x = 18.800727;
        $place20->y = 98.950431;
        $place20->contact = 'non@non.com';
        $place20->website = 'non.com';
        $place20->type = 'building';
        $place20->save();

        $image20 = new Image();
        $image20->fileName = '20.jpg';
        $image20->place_id = $place20->id;
        $image20->save();

        /////////////////////////////////Landmark/////////////////////////////////////////////

        $place21 = new Place();
        $place21->name = 'Salatham';
        $place21->description = 'Salatham';
        $place21->x = 18.804874;
        $place21->y = 98.952703;
        $place21->contact = 'non@non.com';
        $place21->website = 'non.com';
        $place21->type = 'landmark';
        $place21->save();

        $image21 = new Image();
        $image21->fileName = '21.jng';
        $image21->place_id = $place21->id;
        $image21->save();

        $place22 = new Place();
        $place22->name = 'Clock Tower';
        $place22->description = 'Clock Tower';
        $place22->x = 18.796506;
        $place22->y = 98.953276;
        $place22->contact = 'non@non.com';
        $place22->website = 'non.com';
        $place22->type = 'landmark';
        $place22->save();

        $image22 = new Image();
        $image22->fileName = '22.jng';
        $image22->place_id = $place22->id;
        $image22->save();

        $place23 = new Place();
        $place23->name = 'Angkaew';
        $place23->description = 'Angkaew';
        $place23->x = 18.806276;
        $place23->y = 98.950202;
        $place23->contact = 'non@non.com';
        $place23->website = 'non.com';
        $place23->type = 'landmark';
        $place23->save();

        $image23 = new Image();
        $image23->fileName = '23.jng';
        $image23->place_id = $place23->id;
        $image23->save();

        $place24 = new Place();
        $place24->name = 'Elephant spirit house';
        $place24->description = 'Elephant spirit house';
        $place24->x = 18.805608;
        $place24->y = 98.953184;
        $place24->contact = 'non@non.com';
        $place24->website = 'non.com';
        $place24->type = 'landmark';
        $place24->save();

        $image24 = new Image();
        $image24->fileName = '24.jng';
        $image24->place_id = $place24->id;
        $image24->save();

        $place25 = new Place();
        $place25->name = 'Palm Garden';
        $place25->description = 'Palm Garden';
        $place25->x = 18.800839;
        $place25->y = 98.954428;
        $place25->contact = 'non@non.com';
        $place25->website = 'non.com';
        $place25->type = 'landmark';
        $place25->save();

        $image25 = new Image();
        $image25->fileName = '25.jng';
        $image25->place_id = $place25->id;
        $image25->save();

        //////////////////////////Dorm///////////////////////////

        $place26 = new Place();
        $place26->name = '4TH Female Dormitory';
        $place26->description = '4TH Female Dormitory';
        $place26->x = 18.798333;
        $place26->y = 98.953764;
        $place26->contact = 'non@non.com';
        $place26->website = 'non.com';
        $place26->type = 'dormitory';
        $place26->save();

        $image26 = new Image();
        $image26->fileName = '26.jng';
        $image26->place_id = $place26->id;
        $image26->save();

        $place27 = new Place();
        $place27->name = '6TH Female Dormitory';
        $place27->description = '6TH Female Dormitory';
        $place27->x = 18.797495;
        $place27->y = 98.953810;
        $place27->contact = 'non@non.com';
        $place27->website = 'non.com';
        $place27->type = 'dormitory';
        $place27->save();

        $image27 = new Image();
        $image27->fileName = '27.jng';
        $image27->place_id = $place27->id;
        $image27->save();

        $place28 = new Place();
        $place28->name = '5TH Female Dormitory';
        $place28->description = '5TH Female Dormitory';
        $place28->x = 18.797952;
        $place28->y = 98.954711;
        $place28->contact = 'non@non.com';
        $place28->website = 'non.com';
        $place28->type = 'dormitory';
        $place28->save();

        $image28 = new Image();
        $image28->fileName = '28.jng';
        $image28->place_id = $place28->id;
        $image28->save();

        $place29 = new Place();
        $place29->name = '40TH Years Dormitory';
        $place29->description = '40TH Years Dormitory';
        $place29->x = 18.799048;
        $place29->y = 98.958784;
        $place29->contact = 'non@non.com';
        $place29->website = 'non.com';
        $place29->type = 'dormitory';
        $place29->save();

        $image29 = new Image();
        $image29->fileName = '29.jng';
        $image29->place_id = $place29->id;
        $image29->save();

        $place30 = new Place();
        $place30->name = 'Pink Dormitory';
        $place30->description = 'Pink Dormitory';
        $place30->x = 18.799205;
        $place30->y = 98.957820;
        $place30->contact = 'non@non.com';
        $place30->website = 'non.com';
        $place30->type = 'dormitory';
        $place30->save();

        $place30 = new Image();
        $place30->fileName = '30.jng';
        $place30->place_id = $place30->id;
        $place30->save();

        ////////////////////////////////Restaurant///////////////////////

        $place31 = new Place();
        $place31->name = 'Rohmsak Market';
        $place31->description = 'Rohmsak Market';
        $place31->x = 18.799292;
        $place31->y = 98.948710;
        $place31->contact = 'non@non.com';
        $place31->website = 'non.com';
        $place31->type = 'restaurant';
        $place31->save();

        $place31 = new Image();
        $place31->fileName = '31.jng';
        $place31->place_id = $place31->id;
        $place31->save();

        $place32 = new Place();
        $place32->name = 'Humanities Canteen';
        $place32->description = 'Humanities Canteen';
        $place32->x = 18.804318;
        $place32->y = 98.949392;
        $place32->contact = 'non@non.com';
        $place32->website = 'non.com';
        $place32->type = 'restaurant';
        $place32->save();

        $place32 = new Image();
        $place32->fileName = '32.jng';
        $place32->place_id = $place32->id;
        $place32->save();

        $place33 = new Place();
        $place33->name = 'Engineering Canteen';
        $place33->description = 'Engineering Canteen';
        $place33->x = 18.795330;
        $place33->y = 98.951063;
        $place33->contact = 'non@non.com';
        $place33->website = 'non.com';
        $place33->type = 'restaurant';
        $place33->save();

        $place33 = new Image();
        $place33->fileName = '33.jng';
        $place33->place_id = $place33->id;
        $place33->save();

        $place34 = new Place();
        $place34->name = 'Aor Mor Chor Canteen';
        $place34->description = 'Aor Mor Chor Canteen';
        $place34->x = 18.800538;
        $place34->y = 98.952881;
        $place34->contact = 'non@non.com';
        $place34->website = 'non.com';
        $place34->type = 'restaurant';
        $place34->save();

        $place34 = new Image();
        $place34->fileName = '34.jng';
        $place34->place_id = $place34->id;
        $place34->save();

        //////////////////////////////////ATM////////////////////////

        $place35 = new Place();
        $place35->name = 'KrungThai Bank ATM';
        $place35->description = 'KrungThai Bank ATM';
        $place35->x = 18.800474;
        $place35->y = 98.953237;
        $place35->contact = 'non@non.com';
        $place35->website = 'non.com';
        $place35->type = 'ATM';
        $place35->save();

        $place35 = new Image();
        $place35->fileName = '35.jng';
        $place35->place_id = $place35->id;
        $place35->save();

        ////////////////////////////////Sport Field////////////////////


        $place36 = new Place();
        $place36->name = 'Central Gym CMU';
        $place36->description = 'Central Gym CMU';
        $place36->x = 18.797270;
        $place36->y = 98.957622;
        $place36->contact = 'non@non.com';
        $place36->website = 'non.com';
        $place36->type = 'sportField';
        $place36->save();

        $place36 = new Image();
        $place36->fileName = '36.jng';
        $place36->place_id = $place36->id;
        $place36->save();

        $place37 = new Place();
        $place37->name = 'Central Sport Field';
        $place37->description = 'Central Sport Field';
        $place37->x = 18.797102;
        $place37->y = 98.956621;
        $place37->contact = 'non@non.com';
        $place37->website = 'non.com';
        $place37->type = 'sportField';
        $place37->save();

        $place37 = new Image();
        $place37->fileName = '37.jng';
        $place37->place_id = $place37->id;
        $place37->save();

        $place38 = new Place();
        $place38->name = 'Rujirawong Swimming Pool';
        $place38->description = 'Rujirawong Swimming Pool';
        $place38->x = 18.796675;
        $place38->y = 98.955104;
        $place38->contact = 'non@non.com';
        $place38->website = 'non.com';
        $place38->type = 'sportField';
        $place38->save();

        $place38 = new Image();
        $place38->fileName = '38.jng';
        $place38->place_id = $place38->id;
        $place38->save();

        $place39 = new Place();
        $place39->name = 'Shooting Ground';
        $place39->description = 'Shooting Ground';
        $place39->x = 18.797657;
        $place39->y = 98.957655;
        $place39->contact = 'non@non.com';
        $place39->website = 'non.com';
        $place39->type = 'sportField';
        $place39->save();

        $place39 = new Image();
        $place39->fileName = '39.jng';
        $place39->place_id = $place39->id;
        $place39->save();

        $place40 = new Place();
        $place40->name = 'Tennis Court';
        $place40->description = 'Tennis Court';
        $place40->x = 18.799191;
        $place40->y = 98.956811;
        $place40->contact = 'non@non.com';
        $place40->website = 'non.com';
        $place40->type = 'sportField';
        $place40->save();

        $place40 = new Image();
        $place40->fileName = '40.jng';
        $place40->place_id = $place40->id;
        $place40->save();


        /////////////////////////////////Cafe//////////////////////


        $place41 = new Place();
        $place41->name = 'Pleฟrn Coffee';
        $place41->description = 'Pleฟrn Coffee';
        $place41->x = 18.795598;
        $place41->y = 98.953073;
        $place41->contact = 'non@non.com';
        $place41->website = 'non.com';
        $place41->type = 'cafe';
        $place41->save();

        $place41 = new Image();
        $place41->fileName = '41.jng';
        $place41->place_id = $place41->id;
        $place41->save();


        $place42 = new Place();
        $place42->name = 'Social Fresh Coffee';
        $place42->description = 'Social Fresh Coffee';
        $place42->x = 18.802713;
        $place42->y = 98.949657;
        $place42->contact = 'non@non.com';
        $place42->website = 'non.com';
        $place42->type = 'cafe';
        $place42->save();

        $place42 = new Image();
        $place42->fileName = '42.jng';
        $place42->place_id = $place42->id;
        $place42->save();

        $place43 = new Place();
        $place43->name = 'Nome Kased';
        $place43->description = 'Nome Kased';
        $place43->x = 18.792902;
        $place43->y = 98.958927;
        $place43->contact = 'non@non.com';
        $place43->website = 'non.com';
        $place43->type = 'cafe';
        $place43->save();

        $place43 = new Image();
        $place43->fileName = '43.jng';
        $place43->place_id = $place43->id;
        $place43->save();

        ////////////////////////////////CarParking///////////////////

        $place44 = new Place();
        $place44->name = 'Sport Field Car Parking';
        $place44->description = 'Sport Field Car Parking';
        $place44->x = 18.797238;
        $place44->y = 98.957169;
        $place44->contact = 'non@non.com';
        $place44->website = 'non.com';
        $place44->type = 'carParking';
        $place44->save();

        $place44 = new Image();
        $place44->fileName = '44.jng';
        $place44->place_id = $place44->id;
        $place44->save();
    }
}
