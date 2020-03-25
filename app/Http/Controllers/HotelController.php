<?php
/**
Alayna Johnston
Week 8: Controllers Read Operation
https://laravel.com/docs/5.0/eloquent
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Eloquent ORM where each database table has a corresponding Model to interact with the table
class HotelController extends Controller
{
  public function index()
  {
      ////load data from database
      $hotels = Hotel::function_to_pull_data();

      //display results and pass data to a hotels view file.
      return view('hotels')->with('hotels',$hotels);
  }
}
