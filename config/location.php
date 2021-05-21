<?php
//$dotenv = Dotenv\Dotenv::createMutable(dirname(dirname(__FILE__)));
//if (isset($dotenv)){
//    $dotenv->load();
//}
//$dotEnvArray = $dotenv->load();
//$locationApiKey = getenv($dotEnvarray["LOCATIONAPIKEY"]);

$locationApiKey = getenv("LOCATIONAPIKEY");
return [
    "LOCATIONAPIKEY" => $locationApiKey,
    "url" => "http://api.ipstack.com/"
];
