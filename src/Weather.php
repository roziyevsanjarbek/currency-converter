<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class Weather {

    public $client;
    public $shahar;
    private $weather_data;

    public function __construct(){

        $shahar = isset($_POST['city']) ? $_POST['city'] : 'Toshkent';
        $this->shahar = $shahar;


        $url = "http://api.openweathermap.org/data/2.5/weather?q={$shahar}&appid=c7a613032bc2a488bd8dbb7bbaccfc6f";

        // Clientni yaratish
        $this->client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);


        $response = $this->client->request('GET');
        $this->weather_data = json_decode($response->getBody()->getContents());
    }

    public function getWeather()
    {
        return $this->weather_data;
    }
}

