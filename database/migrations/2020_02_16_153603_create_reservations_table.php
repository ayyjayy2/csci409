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
    public function up() //creates table columns
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            //added elements
            $table->unsignedBigInteger('user_id'); //unsigned big int
            $table->foreign('user_id')->references('id')->on('users'); //foreign key referencing id field of users table
            $table->unsigneedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
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
            $table->drop('user_id');
            $table->dropForeign('reservations_user_id_foreign');
            $table->drop('room_id');
            $table->dropForeign('reservations_room_id_foreign');
            $table->drop('num_of_guests');
            $table->drop('arrival');
            $table->drop('departure');
    }
}
