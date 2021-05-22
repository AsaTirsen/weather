<?php
if (file_exists(ANAX_INSTALL_PATH . "/.env")) {
    $dotenv = Dotenv\Dotenv::createMutable(dirname(dirname(__FILE__)));
    $dotenv->load();
    $weatherApiKey = $_ENV['WEATHERAPIKEY'];
} else {
    print("no weather");
    $weatherApiKey = getenv("WEATHERAPIKEY");
}

return [
    "WEATHERAPIKEY" => $weatherApiKey,
    "url" => "http://api.openweathermap.org/data/2.5/onecall"
];
