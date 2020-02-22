<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array of room listings to be created
        = [
              [
                'hotel_id' => '1', //check on unsighed big int
                'type' => 'Luxury Suite', //type: string
                'description' => '2000 sqft, 3 king sized beds, full kitchen', //type string
                'price' => '980', //check type: decimal
                'image' => 'https://placeimg.com/640/480/arch' //type: string
              ],
              [
                'hotel_id' => '1',
                'type' => 'Double',
                'description' => 'Two queen beds',
                'price' => '200',
                'image' => 'https://placeimg.com/640/480/arch'
              ],
              [
                'hotel_id' => '2',
                'type' => 'Suite',
                'description' => 'International luxurious room',
                'price' => '350',
                'image' => 'https://placeimg.com/640/480/arch'
              ],
              [
                'hotel_id' => '2',
                'type' => 'Economy',
                'description' => 'One queen bed, mini fridge',
                'price' => '87.99',
                'image' => 'https://placeimg.com/640/480/arch'
              ],
              [
                'hotel_id' => '3',
                'type' => 'Suite',
                'description' => 'One ultra wide king bed, full kitchen',
                'price' => '399',
                'image' => 'https://placeimg.com/640/480/arch'
              ],
        ];

        //loop through rooms array and create listings using rooms model and mass assignment
        foreach ($rooms as $room) {
          Room::create(array(
            'hotel_id' => $room['hotel_id'],
            'type' => $room['type'],
            'description' => $room['description'],
            'price' => $room['price'],
            'image' => $room['image']
          ));
        }

        /*//array of room bookings to be created
        = [
            [
                'user_id' => '1', //check how to do foreign key
                'room_id' => '1', //check how to do foreign key
                'num_of_guests' => '4' //check how to do integer
                'arrival' => '5/18/2020', //check how to do date
                'departure' => '5/28/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '1'
                'arrival' => '5/10/2020',
                'departure' => '5/12/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '3',
                'num_of_guests' => '3'
                'arrival' => '5/6/2020',
                'departure' => '5/7/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '4',
                'num_of_guests' => '2'
                'arrival' => '5/12/2020',
                'departure' => '5/15/2020'
            ],
            [
                'user_id' => '1',
                'room_id' => '2',
                'num_of_guests' => '2'
                'arrival' => '5/20/2020',
                'departure' => '5/24/2020'
            ],
          ]; //end array

          //loop through bookings array
          */
    }
}
