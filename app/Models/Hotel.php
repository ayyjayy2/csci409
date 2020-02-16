<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //code to allow mass assignment
    protected $fillable =[
      'name',
      'location',
      'description',
      'image'
    ];
    //set up hasMany side of our hotel -> rooms relation
    public function rooms() {
      return $this->hasMany('App\Models\Rooms'); //should room be capitalized?
    }
}
