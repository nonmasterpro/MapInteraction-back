<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'fileName', 'place_id'
    ];

    public function place() {
        return $this->belongsTo('App\Place');
    }
}
