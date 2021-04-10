<?php

namespace Asti\Weather;

use Asti\Weather\WeatherServiceTest;
use Asti\Weather\MockedWeatherRes;
use Asti\Geoip\CurlService;
use Asti\Ipcheck\HelperFunctions;
use PHPUnit\Framework\TestCase;


class WeatherServiceMock extends WeatherService
{
    public function curlWeatherApi($lon, $lat) : array
    {
        $help = new HelperFunctions();
        $res = new MockedWeatherRes();
        if (isset($res["cod"])) {
            return [
                "Error" => "Platsangivelse är fel"
            ];
        } else {
            $json = [
                "CurrentTemp" => substr($res["current"]["temp"], 0, 5),
                "CurrentFeelsLike" => substr($res["current"]["feels_like"], 0, 5),
                "CurrentWeather" => $res["current"]["weather"][0]["description"],
                "DailyDates" => $help->loopThroughDate($res["daily"]),
                "DailyTemperatures" => $help->loopThroughTemp($res["daily"], "temp", "day"),
                "DailyFeelsLike" => $help->loopThroughTemp($res["daily"], "feels_like", "day"),
                "DailyDescriptions" => $help->loopThroughDesc($res["daily"], "weather", "description")
            ];
            return [$json];
        }
    }
}
