<?php
if (file_exists(ANAX_INSTALL_PATH . "/.env")) {
    $dotenv = Dotenv\Dotenv::createMutable(dirname(dirname(__FILE__)));
    $dotenv->load();
    $locationApiKey = $_ENV['LOCATIONAPIKEY'];
} else {
    $locationApiKey = getenv("LOCATIONAPIKEY");
}

return [
    "LOCATIONAPIKEY" => $locationApiKey,
    "url" => "http://api.ipstack.com/"
];
