<?php

namespace App;

use App\UserElegant as UserElegant;
use Illuminate\Notifications\Notifiable;

class User extends UserElegant
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $rules = array(
        'name' => 'required',
        'email'  => 'required'
    );

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function Schedules() {
        return parent::hasMany('App\Schedule');
    }
}
