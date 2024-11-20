<?php

require 'vendor/autoload.php'; // Ensure Guzzle is included via Composer

use GuzzleHttp\Client;

class Currency
{
    const CURRENCY_API_URL = "https://cbu.uz/uz/arkhiv-kursov-valyut/json/";

    private array $currencies = [];

    public function __construct()
    {
        $client = new Client();
        try {
            $response = $client->get(self::CURRENCY_API_URL);
            if ($response->getStatusCode() === 200) {
                $this->currencies = json_decode($response->getBody()->getContents());
            }
        } catch (\Exception $e) {
            throw new Exception("Failed to fetch currency data: " . $e->getMessage());
        }
    }

    public function getCurrencies(): array
    {
        $separated_data = [];
        foreach ($this->currencies as $currency) {
            $separated_data[$currency->Ccy] = $currency->Rate;
        }
        return $separated_data;
    }

    public function exchange(float $amount, string $from = 'USD', string $to = 'UZS'): float
    {
        $currencies = $this->getCurrencies();

        if (!isset($currencies[$from]) && $from !== 'UZS') {
            throw new Exception("Invalid source currency: $from");
        }
        if (!isset($currencies[$to]) && $to !== 'UZS') {
            throw new Exception("Invalid target currency: $to");
        }

        // Conversion Logic
        if ($from === 'UZS') {
            return $amount / $currencies[$to];
        } elseif ($to === 'UZS') {
            return $amount * $currencies[$from];
        } else {
            $uzs_value = $amount * $currencies[$from]; // Convert to UZS first
            return $uzs_value / $currencies[$to];      // Convert to target currency
        }
    }
}


