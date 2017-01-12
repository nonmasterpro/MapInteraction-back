<?php

namespace App;

use Validator;
use Illuminate\Database\Eloquent\Model;

class Elegant extends Model
{
    
    protected $rules = array();

    protected $errors;

    public function validate($data)
    {
        $v = Validator::make($data, $this->rules);

        if ($v->fails()) {
            $this->errors = $v->errors()->toArray();
            return false;
        }

        return true;
    }

    public function errors() {
        return $this->errors;
    }

}
