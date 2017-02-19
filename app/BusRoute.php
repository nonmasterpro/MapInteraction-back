<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    public function Places()
    {
        return $this->belongsToMany('App\Place', 'routes_places');
    }

    public function BusStations()
    {
        return $this->belongsToMany('App\BusStation', 'routes_stations');
    }
}
