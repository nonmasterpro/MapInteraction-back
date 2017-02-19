<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusStation extends Model
{
    public function BusRoutes()
    {
        return $this->belongsToMany('App\BusRoute', 'routes_stations');
    }
}
