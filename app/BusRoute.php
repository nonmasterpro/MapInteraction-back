<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    public function Places()
    {
        return $this->hasMany('App\Place');
    }

    public function BusStation()
    {
        return $this->belongsTo('App\BusStation');
    }
}
