<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    private $rules = array(
        'name' => 'required',
        'description'  => 'required',
        'x' => 'required',
        'y' => 'required',
        'contact' => 'required',
        'website' => 'required',
        'type' => 'required'
    );
    
    public function Images() {
        return $this‐>hasMany('App\Image');
    }
}