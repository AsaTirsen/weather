<?php
/**
 * Configuration file for DI container.
 */

use Asti\Geoip\GeoipService;

return [

    // Services to add to the container.
    "services" => [
        "location" => [
            // Is the service shared, true or false
            // Optional, default is true
            "shared" => true,

            // Callback executed when service is activated
            // Create the service, load its configuration (if any)
            // and set it up.
            "callback" => function () {
                $locationService = new \Asti\Weather\LocationService();

                // Load the configuration files
                $cfg = $this->get("configuration");
                $config = $cfg->load("location.php");
                $settings = $config["config"] ?? null;

                if ($settings["url"] ?? null) {
                    $locationService->setUrl($settings["url"]);
                }
                if ($settings["API-key"] ?? null) {
                    $locationService->setKey($settings["API-key"]);
                }

                return $locationService;
            }
        ],
    ],
];
