<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            //added elements
            $table->integer('user_id')->unsigned(); //unsigned big int
            $table->foreign('user_id')->references('id')->('users'); //foreign key referencing id field of users table
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->('rooms');
            $table->integer('num_of_guests');
            $table->date('arrival');
            $table->date('departure');
            //end of added elements
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
