<?php
$dotenv = Dotenv\Dotenv::createImmutable(dirname(dirname(__FILE__)));
if (isset($dotenv)){
    $dotenv->load();
}
$weatherApiKey = $_ENV['WEATHERAPIKEY'];
return [
    "WEATHERAPIKEY" => $weatherApiKey,
    "url" => "http://api.openweathermap.org/data/2.5/onecall"
];
