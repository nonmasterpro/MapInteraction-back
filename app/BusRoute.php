<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    public function Place()
    {
        return $this->hasOne('App\Place');
    }
}
