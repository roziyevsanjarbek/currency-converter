<?php

require __DIR__ . '/../vendor/autoload.php';
require 'src/DB.php';
use GuzzleHttp\Client;
class Bot
{

    public $client;
    const API_URL = "https://api.telegram.org/bot";

    private $token ='7324279108:AAH0zqOaTCbwa_v4MxecVVnKt_tfwtCrjzI/';

    public function makeRequest($method, $data=[]) {
        $this->client = new Client([
            'base_uri' => self::API_URL . $this->token,
            'timeout'  => 2.0,
        ]);

        $request =  $this->client->request('POST', $method, ['json' => $data]);
        $response = $request->getBody()->getContents();
        return $response;


    }

    public function saveUser($user_id, $username): bool {
        $query = "INSERT INTO currency (user_id, username) VALUES (:user_id, :username)";
        $db = new DB();
        return $db->conn->prepare($query)->execute([
            ':user_id' => $user_id,
            ':username' => $username
        ]);
    }
}
