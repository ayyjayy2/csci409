<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() //creates columns in table
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id'); //predefined field of migration that is a primary key of the row
            $table->unsigneedBigInteger('hotel_id'); //unsigned and foreign key that references the id field of the hotels table
            $table->foreign('hotel_id')->references('id')->on('hotels'); //not sure if 'hotels' is right
            $table->string('type'); //these are the columns being created
            $table->string('description');
            $table->decimal('price',10,2); //add data type: dcimal names 'price' with 10 digits with 2 to the right of the decimal
            $table->string('image'); //then create the columns before adding to repository and commit changes
            $table->timestamps(); //predefined field of migration
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
            $table->drop('hotel_id');
            $table->dropForeign('rooms_hotel_id_foreign');
            $table->drop('type');
            $table->drop('description');
            $table->drop('price',10,2);
            $table->drop('image');
    }
}
