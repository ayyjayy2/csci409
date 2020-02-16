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
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hotel_id')->unsigned(); //unsigned and foreign key that references the id field of the hotels table
            $table->foreign('hotel_id')->references('id')->on('hotels'); //not sure if 'hotels' is right
            $table->string('type');
            $table->string('description');
            $table->decimal('price',10,2); //add data type: dcimal names 'price' with 10 digits with 2 to the right of the decimal
            $table->string('image'); //then create the columns before adding to repository and commit changes
            $table->timestamps();

            //creating table columns?
            $sql = "INSERT INTO rooms (column1, column2, column3, column4, column5) VALUES ('hotel_id', 'type', 'description', 'price', 'image')";
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
    }
}
