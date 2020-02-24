<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///array of room bookings to be created
        = [
            [
                'user_id' => '1', //check how to do foreign key
                'room_id' => '1', //check how to do foreign key
                'num_of_guests' => '4' //check how to do integer
                'arrival' => '2020-05-18', //check how to do date
                'departure' => '2020-05-28'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '1'
                'arrival' => '2020-05-10',
                'departure' => '2020-05-12'
            ],
            [
                'user_id' => '1',
                'room_id' => '3',
                'num_of_guests' => '3'
                'arrival' => '2020-05-06',
                'departure' => '2020-05-07'
            ],
            [
                'user_id' => '1',
                'room_id' => '4',
                'num_of_guests' => '2'
                'arrival' => '2020-05-12',
                'departure' => '2020-05-15'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '2'
                'arrival' => '2020-05-20',
                'departure' => '2020-05-24'
            ],
          ]; //end array

          //loop through reservations array to create a reservation using the reservation model
            foreach ($reservations as $reservation) {
                Reservation::create(array(
                    'user_id' => $reservation['user_id'],
                    'room_id' => $reservation['room_id'],
                    'num_of_guests' => $reservation['num_of_guests'],
                    'arrival' => $reservation['arrival'],
                    'departure' => $reservation['departure']
                ));
            }
    }
}
