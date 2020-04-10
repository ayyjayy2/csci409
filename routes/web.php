<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return '/route';
});

/**replace to point the /hotels route to the index function inside HotelController
Route::get('hotels', function(){
    return '/hotels route';
});
**/

//This will point the /hotels route to the index function inside your HotelController
Route::get('/hotels', 'HotelController@index');

//Dashboard group

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/', function(){return 'Showing users homepage';});

    //Point the route reservations/create/{id} to the create function in the ReservationController
    Route::get('reservations/create/{id}', 'ReservationController@create');

    //point reservations to the ReservationController
    Route::reservation('reservations', 'ReservationController');
    
    //Route::create('reservations/create/{id}', 'ReservationController';});
    /**delete all reservation related routes
    Route::get('reservations', function(){return 'Showing users reservations';});
    Route::get('reservations/new', function(){return 'Showing form to create reservations';});
    Route::get('reservations/{id}', function($id){return 'Showing reservations id';});
    Route::get('reservations/{id}/edit', function($id){return 'Showing edit form for reservation id';});

    Route::post('reservations', function(){return 'Creating reservation';});
    Route::put('reservations/{id}', function($id){return 'Updating reservations id';});
    Route::delete('reservations/{id}', function($id){return 'Deleting reservation id';});
    **/
});
