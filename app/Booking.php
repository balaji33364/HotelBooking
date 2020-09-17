<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User'); 
    }

    public function post(){
        return $this->hasMany('App\Post');
    }
}
