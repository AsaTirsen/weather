<?php
//$dotenv = Dotenv\Dotenv::createImmutable(dirname(dirname(__FILE__)));
//if (isset($dotenv)){
//    $dotenv->load();
//}

$locationApiKey = $_ENV['LOCATIONAPIKEY'];
var_dump($locationApiKey);
return [
    "LOCATIONAPIKEY" => $locationApiKey,
    "url" => "http://api.ipstack.com/"
];
