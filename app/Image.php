<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'fileName',
        'content',
        'contentType',
    ];

    public function place() {
        return $this->belongsTo('Place');
    }
}
