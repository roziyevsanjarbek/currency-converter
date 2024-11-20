<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
class Bot
{

    public $client;
    const API_URL = "https://api.telegram.org/bot";

    private $token ='7324279108:AAH0zqOaTCbwa_v4MxecVVnKt_tfwtCrjzI';

    public function makeRequest($method, $data=[]) {
        $this->client = new Client([
            'base_uri' => self::API_URL . $this->token,
            'timeout'  => 2.0,
        ]);

        $request =  $this->client->request('POST','/'. $method, $data);
        $response = $request->getBody()->getContents();
//        $ch=curl_init();
//        curl_setopt($ch,CURLOPT_URL,self::API_URL. $this->token . '/' . $method);
//        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
//        $response=curl_exec($ch);
//        curl_close($ch);
        return $response;
    }
}
