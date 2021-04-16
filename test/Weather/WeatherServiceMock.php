<?php
//
//namespace Asti\WeatherPackage;
//
//
///**
// * Mocks weatherService.
// */
//class WeatherServiceMock
//{
//    public function curlWeatherApi() : array
//    {
//        $help = new HelperFunctions();
//        $MockedWeatherRes = new MockedWeatherRes();
//        $res = $MockedWeatherRes->getDataThroughCurl();
//        if (isset($res["cod"])) {
//            return [
//                "Error" => "Platsangivelse är fel"
//            ];
//        } else {
//            $json = [
//                "CurrentTemp" => substr($res["current"]["temp"], 0, 5),
//                "CurrentFeelsLike" => substr($res["current"]["feels_like"], 0, 5),
//                "CurrentWeather" => $res["current"]["weather"][0]["description"],
//                "DailyDates" => $help->loopThroughDate($res["daily"]),
//                "DailyTemperatures" => $help->loopThroughTemp($res["daily"], "temp", "day"),
//                "DailyFeelsLike" => $help->loopThroughTemp($res["daily"], "feels_like", "day"),
//                "DailyDescriptions" => $help->loopThroughDesc($res["daily"], "weather", "description")
//            ];
//            return [$json];
//        }
//    }
//}
