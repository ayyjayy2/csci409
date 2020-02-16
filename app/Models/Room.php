<?php
//Models are singular and provides an active record way of working with the db
//every db has a model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //code to allow mass assignment
    protected $fillable =[
      'hotel_id',
      'type',
      'description',
      'price',
      'image'
    ];
    //setting up the belongsTo relationship so a room can belong to a hotel
    public function Hotel(){
      return $this->belongsTo( related: 'App\Models\Hotel');
    }
}
