<?php
$dotenv = Dotenv\Dotenv::createMutable(dirname(dirname(__FILE__)));

$dotenv->load();

if (isset($_ENV["WEATHERAPIKEY"])) {
    $weatherApiKey = $_ENV["WEATHERAPIKEY"];
} else {
    $weatherApiKey = getenv("WEATHERAPIKEY");
}


return [
    "WEATHERAPIKEY" => $weatherApiKey,
    "url" => "http://api.openweathermap.org/data/2.5/onecall"
];
