<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherService;
use Symfony\Contracts\Translation\TranslatorInterface;

class WeatherController extends AbstractController
{
    private $weatherService;

    public function __construct(WeatherService $weather)
    {
        $this->weatherService = $weather;
    }

    /**
     * @Route("/weather", name="weather")
     */
    public function weather(TranslatorInterface $translator)
    {
        $weather = $this->weatherService->getWeather();
        $weather["weather"]["0"]["main"] = $translator->trans($weather["weather"]["0"]["main"]);
        $array_of_temp = [];
        $array_of_temp[0] = $weather["main"]["temp"] - 273.15;
        $array_of_temp[1] = ($array_of_temp[0] * 9/5) + 32;
        $array_of_temp[2] = $weather["main"]["feels_like"] - 273.15;
        $array_of_temp[3] = ($array_of_temp[2] * 9/5) + 32;
        $array_of_temp[4] = (($weather["main"]["temp_max"] - 273.15) * 9/5) + 32;
        $array_of_temp[5] = (($weather["main"]["temp_min"] - 273.15) * 9/5) + 32;
        $weather["wind"]["speed"] = $weather["wind"]["speed"] * 3.6;
        return $this->render('weather.html.twig', [
            'weather' => $weather, 'temp' => $array_of_temp
        ]);
    }
}