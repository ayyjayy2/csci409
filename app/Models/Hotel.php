<?php
//Models are singular and provides an active record way of working with the db
//every db has a model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //code to allow mass assignment where default models only allow yo uto assign data to fields one by one
    protected $fillable =[
      'name',
      'location',
      'description',
      'image'
    ];
    //set up hasMany side of our hotel -> rooms relation
    public function rooms() {
      return $this->hasMany('App\Models\Room'); //should room be capitalized?
    }
}
