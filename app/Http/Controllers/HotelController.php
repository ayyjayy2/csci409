<?php
/**
Alayna Johnston
Week 8: Controllers Read Operation
https://laravel.com/docs/5.0/eloquent
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel; //allowing the controller to type hint the Models/Hotel model

//Eloquent ORM where each database table has a corresponding Model to interact with the table
class HotelController extends Controller
{
  public function index()
  {
      ////load all hotel data from database
      $hotels = Hotel::function_to_pull_data();

      //display results and pass data to a hotels view file.
      return view('hotels')->with('hotels',$hotels);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
  public function show(Reservation $reservation)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
  public function edit(Reservation $reservation)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Reservation $reservation)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Reservation  $reservation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Reservation $reservation)
  {
      //
  }
}
