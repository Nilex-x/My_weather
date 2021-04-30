<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Config\Definition\Exception\Exception;

class WeatherService
{
    private $client;
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->client = HttpClient::create();
        $this->apiKey = $apiKey;
    }

    /**
     * @return array
     */
    public function getWeather()
    {
        $response = $this->client->request('GET', 'https://api.openweathermap.org/data/2.5/weather?q=Toulouse&appid=' . $this->apiKey);
        $weather = json_decode($response->getContent(), true);
        return $weather;
    }

    /**
     * @param string $city
     * 
     * @return array
     */
    public function getWeatherCity(string $city)
    {
        try {
            $response = $this->client->request('GET', 'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=' . $this->apiKey);
            if ($response->getStatusCode() != 200)
                throw new Exception();
            $weather = json_decode($response->getContent(), true);
            return $weather;
        } catch(Exception $e) {
            return [];
        }
    }
}