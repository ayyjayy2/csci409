<?php
//Models are singular and provides an active record way of working with the db
//every db has a model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    //code to allow mass assignment
    protected $fillable =[
      'user_id',
      'type',
      'description',
      'price',
      'image'
    ];
    //set up belongs to relationship so a reseration can belong to a room
    public function rooms(){
      return $this->belongsTo( related: 'App\Models\Room');
    }
    //set up belongs to relationship so a reservation can belong to user where user model is App\user
    public function user(){
      return $this->belongTo( related: 'App\User');
    }
}
