<?php

require 'Currency.php';

$currency = new Currency();

$currencies = $currency->getCurrencies();





require 'views/currencyConverter.php';











?>