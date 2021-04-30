<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherService;
use Symfony\Component\HttpFoundation\Request;

class GoodLocationController extends AbstractController
{
    private $weatherService;

    public function __construct(WeatherService $weather)
    {
        $this->weatherService = $weather;
    }

    /**
     * @Route("/goodlocation", name="newlocation")
     */
    public function parse_city(Request $request)
    {
        $city = $request->query->get('location');
        $weather = $this->weatherService->getWeatherCity($city);
        if (empty($weather))
            return $this->render('badlocation.html.twig');
        $array_of_info = [];
        $array_of_info[0] = $weather["main"]["temp"] - 273.15;
        $array_of_info[1] = ($array_of_info[0] * 9/5) + 32;
        $array_of_info[2] = $weather["main"]["feels_like"] - 273.15;
        $array_of_info[3] = ($array_of_info[2] * 9/5) + 32;
        $array_of_info[4] = (($weather["main"]["temp_max"] - 273.15) * 9/5) + 32;
        $array_of_info[5] = (($weather["main"]["temp_min"] - 273.15) * 9/5) + 32;
        $weather["wind"]["speed"] = $weather["wind"]["speed"] * 3.6;
        return $this->render('weather.html.twig', [
            'weather' => $weather, 'temp' => $array_of_info
        ]);
    }
}