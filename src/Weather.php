<?php

class Weather {

    public $shahar;
    private $weather_data;

    public function __construct(){
       
        $shahar = isset($_POST['city']) ? $_POST['city'] : 'Toshkent';
        $this->shahar = $shahar;

        
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$shahar}&appid=c7a613032bc2a488bd8dbb7bbaccfc6f";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $this->weather_data = curl_exec($ch);
        curl_close($ch);
    }

    public function getWeather()
    {
        return json_decode($this->weather_data);
    }
}

?>
