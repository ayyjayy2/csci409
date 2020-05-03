<?php
/**
 * Sample code on accessing a simple url
 * Run with the following command from a terminal in the SAME directory as the file
 * php currency_example.php --> i put it in C:\xampp\htdocss\csci409\tests ??
 *
 * end result should display the latitude and longitude of the geocoded address
 * in the format -> Lat: the latitude, Lon: the Longitude

 * HINT: to get to the actual data in the response you will need the following
 * once you have decoded the json response (replace $json_response with the variable
 * that you store your decoded json data in) : $json_response->data[0]

 * $json_decode
 */


    /** You will need to sign up for an apikey at the following url
     * https://free.currencyconverterapi.com/
     * and access geocode address aka api_key
    **/
    $api_key = '36d163fcddc7c87b5ac817bdb55d86f0';

    //set your endpoint url;
    // note the question mark (?) at the end of the url
    // this sets up the url for parameters that we will create below
    //url given on my positionStack: http://api.positionstack.com/v1/
    $endpoint = 'https://free.currconv.com/api/v7/convert?';
    //forward geocoding API Endpoint
    //http://api.positionstack.com/v1/forward

    //Set up your url parameters in a key value array
    // For a complete list of parameters refer to the apis documentation
    $params = array(
        'q' => 'USD_EUR',
        'compact' => 'ultra',
        'apiKey' => $api_key,

        //some optional parameters include:
        //& limit = 10
        //& output = json
    );

    //Convert the params to a query string in the following format
    // q=USD_EUR&compact=ultra&apiKey=api_key
    $url_params = http_build_query($params);

    //Fetch data from the url
    $response = file_get_contents($endpoint.$url_params);

    //Decode the json response into an object that can be accessed the following way
    //  $currency->object_parameter
    $currency = json_decode($response);

    /**
    * HINT: to get to the actual data in the response you will need the following
    * once you have decoded the json response (replace $json_response with the variable
    * that you store your decoded json data in) : $json_response->data[0]
    **/

    //Print out the object in a readable format
    print_r($currency);

    //Access the USD_EUR parameter
    echo "USD -> EUR: ".$currency->USD_EUR;

    /**
    * end result should display the latitude and longitude of the geocoded address
    * in the format -> Lat: the latitude, Lon: the Longitude
   **/

    /** ----------------------------------------------------------- **/



    /** API NOTES
    * There are two main API endpoints to choose from:
    *          Forward Geocoding: Geocoding by free-text place name or address
    *          Reverse Geocoding: Geocoding by coordinates or IP address
    *
    **/
?>
