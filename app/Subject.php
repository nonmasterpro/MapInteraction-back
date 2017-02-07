<?php

namespace App;

use App\Elegant as Elegant;
use Illuminate\Database\Eloquent\Model;

class Subject extends Elegant
{
  protected $rules = array(
      'name' => 'required',
      'date'  => 'required',
      'time' => 'required'
  );
}
