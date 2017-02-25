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


        $place = new Place();
        $place->name = 'Faculty of Agriculture';
        $place->description = 'Faculty of Agriculture is locate near by Language Institutions(LI)';
        $place->x = 18.793307;
        $place->y = 98.957806;
        $place->contact = 'non@non.com';
        $place->website = 'non.com';
        $place->type = 'building';
        $place->save();

        $image = new Image();
        $image->fileName = '1.jpg';
        $image->place_id = $place->id;
        $image->save();

        $course1 = new Schedule();
        $course1->courseName = 'Network';
        $course1->day = 2;
        $course1->start = '08:00';
        $course1->end = '09:30';
        $course1->user_id = $admin->id;
        $course1->place_id = $place->id;
        $course1->save();

        $course3 = new Schedule();
        $course3->courseName = 'OOP';
        $course3->day = 2;
        $course3->start = '12:00';
        $course3->end = '14:30';
        $course3->user_id = $admin->id;
        $course3->place_id = $place->id;
        $course3->save();

        $course2 = new Schedule();
        $course2->courseName = 'COMP-PRO';
        $course2->day = 4;
        $course2->start = '09:00';
        $course2->end = '11:30';
        $course2->user_id = $admin->id;
        $course2->place_id = $place->id;
        $course2->save();

        $course4 = new Schedule();
        $course4->courseName = 'OOAD';
        $course4->day = 4;
        $course4->start = '13:00';
        $course4->end = '15:30';
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
        $image2->fileName = '2.png';
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
        $image3->fileName = '3.png';
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
        $image21->fileName = '21.jpg';
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
        $image22->fileName = '22.jpg';
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
        $image23->fileName = '23.jpg';
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
        $image24->fileName = '24.jpg';
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
        $image25->fileName = '25.jpg';
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
        $image26->fileName = '26.jpg';
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
        $image27->fileName = '27.jpg';
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
        $image28->fileName = '28.jpg';
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
        $image29->fileName = '29.jpg';
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

        $image30 = new Image();
        $image30->fileName = '30.jpg';
        $image30->place_id = $place30->id;
        $image30->save();

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

        $image31 = new Image();
        $image31->fileName = '31.jpg';
        $image31->place_id = $place31->id;
        $image31->save();

        $place32 = new Place();
        $place32->name = 'Humanities Canteen';
        $place32->description = 'Humanities Canteen';
        $place32->x = 18.804318;
        $place32->y = 98.949392;
        $place32->contact = 'non@non.com';
        $place32->website = 'non.com';
        $place32->type = 'restaurant';
        $place32->save();

        $image32 = new Image();
        $image32->fileName = '32.jpg';
        $image32->place_id = $place32->id;
        $image32->save();

        $place33 = new Place();
        $place33->name = 'Engineering Canteen';
        $place33->description = 'Engineering Canteen';
        $place33->x = 18.795330;
        $place33->y = 98.951063;
        $place33->contact = 'non@non.com';
        $place33->website = 'non.com';
        $place33->type = 'restaurant';
        $place33->save();

        $image33 = new Image();
        $image33->fileName = '33.jpg';
        $image33->place_id = $place33->id;
        $image33->save();

        $place34 = new Place();
        $place34->name = 'Aor Mor Chor Canteen';
        $place34->description = 'Aor Mor Chor Canteen';
        $place34->x = 18.800538;
        $place34->y = 98.952881;
        $place34->contact = 'non@non.com';
        $place34->website = 'non.com';
        $place34->type = 'restaurant';
        $place34->save();

        $image34 = new Image();
        $image34->fileName = '34.jpg';
        $image34->place_id = $place34->id;
        $image34->save();

        //////////////////////////////////ATM////////////////////////

        $place35 = new Place();
        $place35->name = 'ATM';
        $place35->description = 'ATM';
        $place35->x = 18.800474;
        $place35->y = 98.953237;
        $place35->contact = 'non@non.com';
        $place35->website = 'non.com';
        $place35->type = 'ATM';
        $place35->save();

        $image35 = new Image();
        $image35->fileName = '35.jpg';
        $image35->place_id = $place35->id;
        $image35->save();

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

        $image36 = new Image();
        $image36->fileName = '36.jpg';
        $image36->place_id = $place36->id;
        $image36->save();

        $place37 = new Place();
        $place37->name = 'Central Sport Field';
        $place37->description = 'Central Sport Field';
        $place37->x = 18.797102;
        $place37->y = 98.956621;
        $place37->contact = 'non@non.com';
        $place37->website = 'non.com';
        $place37->type = 'sportField';
        $place37->save();

        $image37 = new Image();
        $image37->fileName = '37.jpg';
        $image37->place_id = $place37->id;
        $image37->save();

        $place38 = new Place();
        $place38->name = 'Rujirawong Swimming Pool';
        $place38->description = 'Rujirawong Swimming Pool';
        $place38->x = 18.796675;
        $place38->y = 98.955104;
        $place38->contact = 'non@non.com';
        $place38->website = 'non.com';
        $place38->type = 'sportField';
        $place38->save();

        $image38 = new Image();
        $image38->fileName = '38.jpg';
        $image38->place_id = $place38->id;
        $image38->save();

        $place39 = new Place();
        $place39->name = 'Shooting Ground';
        $place39->description = 'Shooting Ground';
        $place39->x = 18.797657;
        $place39->y = 98.957655;
        $place39->contact = 'non@non.com';
        $place39->website = 'non.com';
        $place39->type = 'sportField';
        $place39->save();

        $image39 = new Image();
        $image39->fileName = '39.jpg';
        $image39->place_id = $place39->id;
        $image39->save();

        $place40 = new Place();
        $place40->name = 'Tennis Court';
        $place40->description = 'Tennis Court';
        $place40->x = 18.799191;
        $place40->y = 98.956811;
        $place40->contact = 'non@non.com';
        $place40->website = 'non.com';
        $place40->type = 'sportField';
        $place40->save();

        $image40 = new Image();
        $image40->fileName = '40.jpg';
        $image40->place_id = $place40->id;
        $image40->save();


        /////////////////////////////////Cafe//////////////////////


        $place41 = new Place();
        $place41->name = 'Plearn Coffee';
        $place41->description = 'Pleฟrn Coffee';
        $place41->x = 18.795598;
        $place41->y = 98.953073;
        $place41->contact = 'non@non.com';
        $place41->website = 'non.com';
        $place41->type = 'cafe';
        $place41->save();

        $image41 = new Image();
        $image41->fileName = '41.jpg';
        $image41->place_id = $place41->id;
        $image41->save();


        $place42 = new Place();
        $place42->name = 'Social Fresh Coffee';
        $place42->description = 'Social Fresh Coffee';
        $place42->x = 18.802713;
        $place42->y = 98.949657;
        $place42->contact = 'non@non.com';
        $place42->website = 'non.com';
        $place42->type = 'cafe';
        $place42->save();

        $image42 = new Image();
        $image42->fileName = '42.jpg';
        $image42->place_id = $place42->id;
        $image42->save();

        $place43 = new Place();
        $place43->name = 'Nome Kased';
        $place43->description = 'Nome Kased';
        $place43->x = 18.792902;
        $place43->y = 98.958927;
        $place43->contact = 'non@non.com';
        $place43->website = 'non.com';
        $place43->type = 'cafe';
        $place43->save();

        $image43 = new Image();
        $image43->fileName = '43.jpg';
        $image43->place_id = $place43->id;
        $image43->save();

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

        $image44 = new Image();
        $image44->fileName = '44.jpg';
        $image44->place_id = $place44->id;
        $image44->save();

        ////////////////////////////////DormMale////////////////////////////

        $place45 = new Place();
        $place45->name = '7TH Male Dormitory';
        $place45->description = '7TH Male Dormitory';
        $place45->x = 18.799488;
        $place45->y = 98.950083;
        $place45->contact = 'non@non.com';
        $place45->website = 'non.com';
        $place45->type = 'dormitory';
        $place45->save();

        $image45 = new Image();
        $image45->fileName = '45-49.jpg';
        $image45->place_id = $place45->id;
        $image45->save();

        $place46 = new Place();
        $place46->name = '6TH Male Dormitory';
        $place46->description = '6TH Male Dormitory';
        $place46->x = 18.797906;
        $place46->y = 98.951889;
        $place46->contact = 'non@non.com';
        $place46->website = 'non.com';
        $place46->type = 'dormitory';
        $place46->save();

        $image46 = new Image();
        $image46->fileName = '45-49.jpg';
        $image46->place_id = $place46->id;
        $image46->save();

        $place47 = new Place();
        $place47->name = '5TH Male Dormitory';
        $place47->description = '5TH Male Dormitory';
        $place47->x = 18.797129;
        $place47->y = 98.951783;
        $place47->contact = 'non@non.com';
        $place47->website = 'non.com';
        $place47->type = 'dormitory';
        $place47->save();

        $image47 = new Image();
        $image47->fileName = '45-49.jpg';
        $image47->place_id = $place47->id;
        $image47->save();

        $place48 = new Place();
        $place48->name = '4TH Male Dormitory';
        $place48->description = '4TH Male Dormitory';
        $place48->x = 18.797389;
        $place48->y = 98.952953;
        $place48->contact = 'non@non.com';
        $place48->website = 'non.com';
        $place48->type = 'dormitory';
        $place48->save();

        $image48 = new Image();
        $image48->fileName = '45-49.jpg';
        $image48->place_id = $place48->id;
        $image48->save();

        $place49 = new Place();
        $place49->name = '3TH Male Dormitory';
        $place49->description = '3TH Male Dormitory';
        $place49->x = 18.798450;
        $place49->y = 98.952754;
        $place49->contact = 'non@non.com';
        $place49->website = 'non.com';
        $place49->type = 'dormitory';
        $place49->save();

        $image49 = new Image();
        $image49->fileName = '45-49.jpg';
        $image49->place_id = $place49->id;
        $image49->save();

        //////////////////////////////stationsPurple///////////////////////

        $stationP1 = new BusStation();
        $stationP1->name = 'Nom Kased Station';
        $stationP1->x = 18.793654;
        $stationP1->y = 98.959380;
        $stationP1->save();

        $stationP2 = new BusStation();
        $stationP2->name = 'Volley Ball Court 2nd F Dorm Station';
        $stationP2->x = 18.798969;
        $stationP2->y = 98.953428;
        $stationP2->save();

        $stationP3 = new BusStation();
        $stationP3->name = '6th Female Dorm Station';
        $stationP3->x = 18.797250;
        $stationP3->y = 98.953439;
        $stationP3->save();

        $stationP4 = new BusStation();
        $stationP4->name = 'Industry Building of Education Station';
        $stationP4->x = 18.795445;
        $stationP4->y = 98.954300;
        $stationP4->save();

        $stationP5 = new BusStation();
        $stationP5->name = '1st Building of Education Station';
        $stationP5->x = 18.793609;
        $stationP5->y = 98.955259;
        $stationP5->save();

        $stationP6 = new BusStation();
        $stationP6->name = 'Business Administator Station';
        $stationP6->x = 18.793196;
        $stationP6->y = 98.957003;
        $stationP6->save();

        $stationP7 = new BusStation();
        $stationP7->name = 'College of Graduated Station';
        $stationP7->x = 18.794627;
        $stationP7->y = 98.958684;
        $stationP7->save();

        $stationP8 = new BusStation();
        $stationP8->name = 'Central Sport Field Station';
        $stationP8->x = 18.797143;
        $stationP8->y = 98.957120;
        $stationP8->save();

        $stationP9 = new BusStation();
        $stationP9->name = 'Phailom 7-Eleven Station';
        $stationP9->x = 18.799524;
        $stationP9->y = 98.956016;
        $stationP9->save();

        $stationP10 = new BusStation();
        $stationP10->name = '3th Female Dorm Station';
        $stationP10->x = 18.799377;
        $stationP10->y = 98.952903;
        $stationP10->save();

        //////////////////////////////stationsGreen///////////////////////

        $stationG1 = new BusStation();
        $stationG1->name = 'The Front Gate CMU Station';
        $stationG1->x = 18.807595;
        $stationG1->y = 98.954855;
        $stationG1->save();

        $stationG2 = new BusStation();
        $stationG2->name = 'University Office Station';
        $stationG2->x = 18.804806;
        $stationG2->y = 98.954474;
        $stationG2->save();

        $stationG3 = new BusStation();
        $stationG3->name = 'The Front of Library Station';
        $stationG3->x = 18.801608;
        $stationG3->y = 98.951324;
        $stationG3->save();

        $stationG4 = new BusStation();
        $stationG4->name = '3th Female Dorm Station';
        $stationG4->x = 18.799572;
        $stationG4->y = 98.952741;
        $stationG4->save();

        $stationG5 = new BusStation();
        $stationG5->name = 'Volley Ball Court 2nd F Dorm Station';
        $stationG5->x = 18.798969;
        $stationG5->y = 98.953428;
        $stationG5->save();

        $stationG6 = new BusStation();
        $stationG6->name = '6th Female Dorm Station';
        $stationG6->x = 18.797250;
        $stationG6->y = 98.953439;
        $stationG6->save();

        $stationG7 = new BusStation();
        $stationG7->name = '1st Building of Education Station';
        $stationG7->x = 18.793609;
        $stationG7->y = 98.955259;
        $stationG7->save();

        $stationG8 = new BusStation();
        $stationG8->name = 'Gate of Education Station';
        $stationG8->x = 18.793408;
        $stationG8->y = 98.955268;
        $stationG8->save();

        $stationG9 = new BusStation();
        $stationG9->name = '4th Male Dorm Station';
        $stationG9->x = 18.797935;
        $stationG9->y = 98.953119;
        $stationG9->save();

        $stationG10 = new BusStation();
        $stationG10->name = '3rd Female Dorm Station';
        $stationG10->x = 18.799377;
        $stationG10->y = 98.952903;
        $stationG10->save();

        $stationG11 = new BusStation();
        $stationG11->name = 'Cooperative CMU Station';
        $stationG11->x = 18.801536;
        $stationG11->y = 98.951071;
        $stationG11->save();

        $stationG12 = new BusStation();
        $stationG12->name = 'Salatham Station';
        $stationG12->x = 18.804563;
        $stationG12->y = 98.954006;
        $stationG12->save();

        $stationG13 = new BusStation();
        $stationG13->name = 'Rugby Field Station';
        $stationG13->x = 18.805928;
        $stationG13->y = 98.955421;
        $stationG13->save();

        //////////////////////////////stationsOrange//////////////

        $stationO1 = new BusStation();
        $stationO1->name = 'Rhomsak Market(Faihin) Station';
        $stationO1->x = 18.799483;
        $stationO1->y = 98.948324;
        $stationO1->save();

        $stationO2 = new BusStation();
        $stationO2->name = '4th Male Dorm Station';
        $stationO2->x = 18.796873;
        $stationO2->y = 98.952524;
        $stationO2->save();

        $stationO3 = new BusStation();
        $stationO3->name = 'Rujirawong Swimming Pool Station';
        $stationO3->x = 18.796329;
        $stationO3->y = 98.955280;
        $stationO3->save();

        $stationO4 = new BusStation();
        $stationO4->name = 'International College Station';
        $stationO4->x = 18.796225;
        $stationO4->y = 98.960002;
        $stationO4->save();

        $stationO5 = new BusStation();
        $stationO5->name = '40th Years Dorm Station';
        $stationO5->x = 18.798632;
        $stationO5->y = 98.958637;
        $stationO5->save();

        $stationO6 = new BusStation();
        $stationO6->name = 'Pink Dorm Station';
        $stationO6->x = 18.798959;
        $stationO6->y = 98.957419;
        $stationO6->save();

        $stationO7 = new BusStation();
        $stationO7->name = 'Phailom 7-Eleven Station';
        $stationO7->x = 18.799524;
        $stationO7->y = 98.956016;
        $stationO7->save();

        $stationO8 = new BusStation();
        $stationO8->name = '3rd Female Dorm Station';
        $stationO8->x = 18.799377;
        $stationO8->y = 98.952903;
        $stationO8->save();

        ///////////////////////////////stationsred//////////////////////

        $stationR1 = new BusStation();
        $stationR1->name = '3rd Female Dorm Station Station';
        $stationR1->x = 18.799377;
        $stationR1->y = 98.952903;
        $stationR1->save();

        $stationR2 = new BusStation();
        $stationR2->name = 'Cooperative CMU Station';
        $stationR2->x = 18.801536;
        $stationR2->y = 98.951071;
        $stationR2->save();

        $stationR3 = new BusStation();
        $stationR3->name = 'Social Science Station';
        $stationR3->x = 18.803119;
        $stationR3->y = 98.950081;
        $stationR3->save();

        $stationR4 = new BusStation();
        $stationR4->name = 'Humanities Canteen Station';
        $stationR4->x = 18.803967;
        $stationR4->y = 98.948991;
        $stationR4->save();

        $stationR5 = new BusStation();
        $stationR5->name = 'Angkaew Station';
        $stationR5->x = 18.805309;
        $stationR5->y = 98.950196;
        $stationR5->save();

        $stationR6 = new BusStation();
        $stationR6->name = 'Political Science Station';
        $stationR6->x = 18.803027;
        $stationR6->y = 98.954401;
        $stationR6->save();

        $stationR7 = new BusStation();
        $stationR7->name = 'Aor Mor Chor Station';
        $stationR7->x = 18.800657;
        $stationR7->y = 98.953587;
        $stationR7->save();

        ///////////////////////////////stationslightblue////////////////

        $stationLB1 = new BusStation();
        $stationLB1->name = '3rd Female Dorm Station Station';
        $stationLB1->x = 18.799377;
        $stationLB1->y = 98.952903;
        $stationLB1->save();

        $stationLB2 = new BusStation();
        $stationLB2->name = 'Economics Station';
        $stationLB2->x = 18.801179;
        $stationLB2->y = 98.950379;
        $stationLB2->save();

        $stationLB3 = new BusStation();
        $stationLB3->name = 'Mass Communication Station';
        $stationLB3->x = 18.802283;
        $stationLB3->y = 98.948665;
        $stationLB3->save();

        $stationLB4 = new BusStation();
        $stationLB4->name = 'Cooperative CMU Station';
        $stationLB4->x = 18.801509;
        $stationLB4->y = 98.951144;
        $stationLB4->save();

        $stationLB5 = new BusStation();
        $stationLB5->name = 'Social Science Station';
        $stationLB5->x = 18.803119;
        $stationLB5->y = 98.950081;
        $stationLB5->save();

        $stationLB6 = new BusStation();
        $stationLB6->name = 'Humanities Canteen Station';
        $stationLB6->x = 18.803967;
        $stationLB6->y = 98.948991;
        $stationLB6->save();

        $stationLB7 = new BusStation();
        $stationLB7->name = 'Law Station';
        $stationLB7->x = 18.804488;
        $stationLB7->y = 98.948132;
        $stationLB7->save();

        $stationLB8 = new BusStation();
        $stationLB8->name = 'The Front of Library Station';
        $stationLB8->x = 18.801608;
        $stationLB8->y = 98.951324;
        $stationLB8->save();

        $stationLB9 = new BusStation();
        $stationLB9->name = 'Architecture Station';
        $stationLB9->x = 18.798060;
        $stationLB9->y = 98.948454;
        $stationLB9->save();

        $stationLB10 = new BusStation();
        $stationLB10->name = '4th Male Dorm Station';
        $stationLB10->x = 18.796873;
        $stationLB10->y = 98.952524;
        $stationLB10->save();

        ///////////////////////////////stationblue/////////////////

        $stationB1 = new BusStation();
        $stationB1->name = 'The Front Gate CMU Station';
        $stationB1->x = 18.807595;
        $stationB1->y = 98.954855;
        $stationB1->save();

        $stationB2 = new BusStation();
        $stationB2->name = 'University Office Station';
        $stationB2->x = 18.804806;
        $stationB2->y = 98.954474;
        $stationB2->save();

        $stationB3 = new BusStation();
        $stationB3->name = 'Political Science Station';
        $stationB3->x = 18.803027;
        $stationB3->y = 98.954401;
        $stationB3->save();

        $stationB4 = new BusStation();
        $stationB4->name = 'Activity Building Station';
        $stationB4->x = 18.800657;
        $stationB4->y = 98.953587;
        $stationB4->save();

        $stationB5 = new BusStation();
        $stationB5->name = '40th Years Dormitory Station';
        $stationB5->x = 18.798632;
        $stationB5->y = 98.958637;
        $stationB5->save();

        $stationB6 = new BusStation();
        $stationB6->name = 'Phailom 7-Eleven Station';
        $stationB6->x = 18.799524;
        $stationB6->y = 98.956016;
        $stationB6->save();

        $stationB7 = new BusStation();
        $stationB7->name = 'Aor Mor Chor Station';
        $stationB7->x = 18.800634;
        $stationB7->y = 98.953391;
        $stationB7->save();

        $stationB8 = new BusStation();
        $stationB8->name = 'Salatham Opposite Post Office Station';
        $stationB8->x = 18.804563;
        $stationB8->y = 98.954006;
        $stationB8->save();

        ////////////////////////////////route///////////////////////////////
        $routeGreen = new BusRoute();
        $routeGreen->name = 'Green Route';
        $routeGreen->save();
        $routeGreen->BusStations()->attach($stationG1->id);
        $routeGreen->BusStations()->attach($stationG2->id);
        $routeGreen->BusStations()->attach($stationG3->id);
        $routeGreen->BusStations()->attach($stationG4->id);
        $routeGreen->BusStations()->attach($stationG5->id);
        $routeGreen->BusStations()->attach($stationG6->id);
        $routeGreen->BusStations()->attach($stationG7->id);
        $routeGreen->BusStations()->attach($stationG8->id);
        $routeGreen->BusStations()->attach($stationG9->id);
        $routeGreen->BusStations()->attach($stationG10->id);
        $routeGreen->BusStations()->attach($stationG11->id);
        $routeGreen->BusStations()->attach($stationG12->id);
        $routeGreen->BusStations()->attach($stationG13->id);
        $routeGreen->Places()->attach($place12->id);
        $routeGreen->Places()->attach($place17->id);
        $routeGreen->Places()->attach($place20->id);
        $routeGreen->Places()->attach($place21->id);
        $routeGreen->Places()->attach($place22->id);
        $routeGreen->Places()->attach($place24->id);
        $routeGreen->Places()->attach($place26->id);
        $routeGreen->Places()->attach($place27->id);
        $routeGreen->save();

        $routeOrange = new BusRoute();
        $routeOrange->name = 'Orange Route';
        $routeOrange->save();
        $routeOrange->BusStations()->attach($stationO1->id);
        $routeOrange->BusStations()->attach($stationO2->id);
        $routeOrange->BusStations()->attach($stationO3->id);
        $routeOrange->BusStations()->attach($stationO4->id);
        $routeOrange->BusStations()->attach($stationO5->id);
        $routeOrange->BusStations()->attach($stationO6->id);
        $routeOrange->BusStations()->attach($stationO7->id);
        $routeOrange->BusStations()->attach($stationO8->id);
        $routeOrange->Places()->attach($place22->id);
        $routeOrange->Places()->attach($place28->id);
        $routeOrange->Places()->attach($place29->id);
        $routeOrange->Places()->attach($place30->id);
        $routeOrange->Places()->attach($place31->id);
        $routeOrange->Places()->attach($place38->id);
        $routeOrange->Places()->attach($place40->id);
        $routeOrange->save();

        $routeRed = new BusRoute();
        $routeRed->name = 'Red Route';
        $routeRed->save();
        $routeRed->BusStations()->attach($stationR1->id);
        $routeRed->BusStations()->attach($stationR2->id);
        $routeRed->BusStations()->attach($stationR3->id);
        $routeRed->BusStations()->attach($stationR4->id);
        $routeRed->BusStations()->attach($stationR5->id);
        $routeRed->BusStations()->attach($stationR6->id);
        $routeRed->BusStations()->attach($stationR7->id);
        $routeRed->Places()->attach($place10->id);
        $routeRed->Places()->attach($place15->id);
        $routeRed->Places()->attach($place17->id);
        $routeRed->Places()->attach($place18->id);
        $routeRed->Places()->attach($place20->id);
        $routeRed->Places()->attach($place23->id);
        $routeRed->Places()->attach($place25->id);
        $routeRed->Places()->attach($place32->id);
        $routeRed->Places()->attach($place34->id);
        $routeRed->Places()->attach($place35->id);
        $routeRed->Places()->attach($place42->id);
        $routeRed->save();

        $routeLightBlue = new BusRoute();
        $routeLightBlue->name = 'LightBlue Route';
        $routeLightBlue->save();
        $routeLightBlue->BusStations()->attach($stationLB1->id);
        $routeLightBlue->BusStations()->attach($stationLB2->id);
        $routeLightBlue->BusStations()->attach($stationLB3->id);
        $routeLightBlue->BusStations()->attach($stationLB4->id);
        $routeLightBlue->BusStations()->attach($stationLB5->id);
        $routeLightBlue->BusStations()->attach($stationLB6->id);
        $routeLightBlue->BusStations()->attach($stationLB7->id);
        $routeLightBlue->BusStations()->attach($stationLB8->id);
        $routeLightBlue->BusStations()->attach($stationLB9->id);
        $routeLightBlue->BusStations()->attach($stationLB10->id);
        $routeLightBlue->Places()->attach($place11->id);
        $routeLightBlue->Places()->attach($place13->id);
        $routeLightBlue->Places()->attach($place14->id);
        $routeLightBlue->Places()->attach($place15->id);
        $routeLightBlue->Places()->attach($place17->id);
        $routeLightBlue->Places()->attach($place19->id);
        $routeLightBlue->Places()->attach($place20->id);
        $routeLightBlue->Places()->attach($place22->id);
        $routeLightBlue->Places()->attach($place26->id);
        $routeLightBlue->Places()->attach($place27->id);
        $routeLightBlue->Places()->attach($place28->id);
        $routeLightBlue->Places()->attach($place32->id);
        $routeLightBlue->Places()->attach($place33->id);
        $routeLightBlue->save();

        $routePurple = new BusRoute();
        $routePurple->name = 'Purple Route';
        $routePurple->save();
        $routePurple->BusStations()->attach($stationP1->id);
        $routePurple->BusStations()->attach($stationP2->id);
        $routePurple->BusStations()->attach($stationP3->id);
        $routePurple->BusStations()->attach($stationP4->id);
        $routePurple->BusStations()->attach($stationP5->id);
        $routePurple->BusStations()->attach($stationP6->id);
        $routePurple->BusStations()->attach($stationP7->id);
        $routePurple->BusStations()->attach($stationP8->id);
        $routePurple->BusStations()->attach($stationP9->id);
        $routePurple->BusStations()->attach($stationP10->id);
        $routePurple->Places()->attach($place->id);
        $routePurple->Places()->attach($place4->id);
        $routePurple->Places()->attach($place9->id);
        $routePurple->Places()->attach($place12->id);
        $routePurple->Places()->attach($place22->id);
        $routePurple->Places()->attach($place26->id);
        $routePurple->Places()->attach($place27->id);
        $routePurple->Places()->attach($place28->id);
        $routePurple->Places()->attach($place29->id);
        $routePurple->Places()->attach($place30->id);
        $routePurple->Places()->attach($place36->id);
        $routePurple->Places()->attach($place37->id);
        $routePurple->Places()->attach($place38->id);
        $routePurple->Places()->attach($place40->id);
        $routePurple->Places()->attach($place43->id);
        $routePurple->Places()->attach($place44->id);
        $routePurple->save();

        $routeBlue = new BusRoute();
        $routeBlue->name = 'Blue Route';
        $routeBlue->save();
        $routeBlue->BusStations()->attach($stationB1->id);
        $routeBlue->BusStations()->attach($stationB2->id);
        $routeBlue->BusStations()->attach($stationB3->id);
        $routeBlue->BusStations()->attach($stationB4->id);
        $routeBlue->BusStations()->attach($stationB5->id);
        $routeBlue->BusStations()->attach($stationB6->id);
        $routeBlue->BusStations()->attach($stationB7->id);
        $routeBlue->BusStations()->attach($stationB8->id);
        $routeBlue->Places()->attach($place18->id);
        $routeBlue->Places()->attach($place21->id);
        $routeBlue->Places()->attach($place24->id);
        $routeBlue->Places()->attach($place25->id);
        $routeBlue->Places()->attach($place34->id);
        $routeBlue->Places()->attach($place35->id);
        $routeBlue->Places()->attach($place40->id);
        $routeBlue->Places()->attach($place42->id);
        $routeBlue->save();



    }
}
