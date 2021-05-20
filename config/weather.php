<?php
$dotenv = Dotenv\Dotenv::createImmutable(dirname(dirname(__FILE__)));
$dotenv->load();

$weatherApiKey = $_ENV['WEATHERAPIKEY'];
var_dump($weatherApiKey);
return [
    "WEATHERAPIKEY" => $weatherApiKey,
    "url" => "http://api.openweathermap.org/data/2.5/onecall"
];
