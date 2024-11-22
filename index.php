<?php






$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/weather') {
    require 'Weather.php';
    require 'src/currency.php';
    $currency = new Currency();
    $currencies = $currency->getCurrencies();
}elseif($uri == '/currency'){
    require 'src/currency.php';
    $currency  = new Currency();
    $currencies = $currency->getCurrencies();
    require 'views/currencyConverter.php';
}elseif ($uri == '/telegram'){
    require 'app/bot.php';

}
else{
    echo '404';
}








?>