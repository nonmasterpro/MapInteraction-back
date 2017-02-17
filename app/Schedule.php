<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function Place()
    {
        return $this->belongsTo('App\Place');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
