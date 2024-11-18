<?php
require 'src/Bot.php';

require 'src/currency.php';

$currency = new Currency();

$bot = new Bot();

$update = json_decode(file_get_contents('php://input'));

//input$bot->makeRequest('sendMessage', [
//    'chat_id' => $update->message->from->id,
//    'text' => $update->message->text,
//]);

$text = $update->message->text;
$from_id = $update->message->from->id;

if ($text == '/start'){
   $responce = $bot->makeRequest('sendMessage', [
       'chat_id' => $from_id,
       'text' => "Hello world <a href = '' >Telegram API </a>",
       'parse_mode' => 'html'

   ]);
}

if ($text == '/currency'){
    $currencies = $currency->getCurrencies();

    $currency_list = "";

    foreach($currencies as $currency => $rate){
        $currency_list .= $currency.": ".$rate."\n";
    }
    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $currency_list,
    ]);
}




















//$bot=new Bot();
//$bot->makeRequest('sendMessage',[
//    'chat_id'=>1184585040,
//    'text'=>'Hello from Bot'
//]);
//$bot->makeRequest('sendVideo',[
//    'chat_id'=>1184585040,
//    'video'=>'https://www.w3schools.com/html/mov_bbb.mp4'
//]);


