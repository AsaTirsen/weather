<?php
$dotenv = Dotenv\Dotenv::createMutable(dirname(dirname(__FILE__)));

$dotenv->load();

if (isset($_ENV["LOCATIONAPIKEY"])) {
    $locationApiKey = $_ENV["LOCATIONAPIKEY"];
} else {
    $locationApiKey = getenv("LOCATIONAPIKEY");
}


return [
    "LOCATIONAPIKEY" => $locationApiKey,
    "url" => "http://api.ipstack.com/"
];
