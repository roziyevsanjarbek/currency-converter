<?php
require 'src/Bot.php';

require 'src/currency.php';

require 'src/Weather.php';

$currency = new Currency();

$bot = new Bot();

$weather = new Weather();

$update = json_decode(file_get_contents('php://input'));



$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user_name = $message->from->username;


if ($text == '/start'){

    $bot->saveUser($from_id, $user_name);
    $reply_keyboard = [
        'keyboard' => [
            [
                ['text' => 'Ob havo'],
                ['text' => 'Valyuta'],
            ]
        ],
        'resize_keyboard' => true,
    ];

   $responce = $bot->makeRequest('sendMessage', [
       'chat_id' => $from_id,
       'text' => "Hello world <a href = '' >Telegram API </a>",
       'parse_mode' => 'html',
       'reply_markup' => json_encode($reply_keyboard)

   ]);
}
if ($text == 'Ob havo') {
    $weather_info = $weather->getWeather();


    $reply = "Shahar: {$weather_info->name}\n";
    $reply .= "Harorat: " . round($weather_info->main->temp - 273.15, 1) . "°C\n";
    $reply .= "Bosim: {$weather_info->main->pressure} hPa\n";
    $reply .= "Namlik: {$weather_info->main->humidity}%\n";
    $reply .= "Shamol tezligi: {$weather_info->wind->speed} m/s\n";
    $reply .= "Holat: {$weather_info->weather[0]->description}";


    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $reply,
    ]);
}
if ($text == 'Valyuta') {
    $currencies = $currency->getCurrencies();

    $currency_list = "";

    foreach($currencies as $currency => $rate){
        $currency_list .= $currency." = ".$rate." UZS"."\n";
    }
    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $currency_list,
    ]);
 }

if ($text == '/currency'){
    $currencies = $currency->getCurrencies();

    $currency_list = "";

    foreach($currencies as $currency => $rate){
        $currency_list .= $currency." = ".$rate." UZS"."\n";
    }
    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $currency_list,
    ]);
}

if ($text == '/weather') {

    $weather_info = $weather->getWeather();


    $reply = "Shahar: {$weather_info->name}\n";
    $reply .= "Harorat: " . round($weather_info->main->temp - 273.15, 1) . "°C\n";
    $reply .= "Bosim: {$weather_info->main->pressure} hPa\n";
    $reply .= "Namlik: {$weather_info->main->humidity}%\n";
    $reply .= "Shamol tezligi: {$weather_info->wind->speed} m/s\n";
    $reply .= "Holat: {$weather_info->weather[0]->description}";


    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $reply,
    ]);
}















echo "ishladi";






