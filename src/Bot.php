<?php

class Bot
{
    const API_URL = "https://api.telegram.org/bot";

    private $token ='7324279108:AAH0zqOaTCbwa_v4MxecVVnKt_tfwtCrjzI';

    public function makeRequest($method, $data=[]) {
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,self::API_URL. $this->token . '/' . $method);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $response=curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
