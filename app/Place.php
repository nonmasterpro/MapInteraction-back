<?php

namespace App;

use App\Elegant as Elegant;
use Illuminate\Database\Eloquent\Model;

class Place extends Elegant
{

    protected $rules = array(
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