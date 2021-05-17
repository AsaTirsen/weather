[![Build Status](https://travis-ci.org/AsaTirsen/weather.svg?branch=main)](https://travis-ci.org/AsaTirsen/weather)

# Anax module for weather forecast and history
This module can be incorporated with the [Anax framework](https://github.com/canax) to provide a service that checks weahter forecast and historical weather data
based on ip-adress. The module was created as a part of the course Webbaserade ramverk och designmönster, Blekinge Tekniska Högskola.


# To install
In your composer.json do:

        composer require asti/weather

# Integrate the module  
## From the root of your Anax repo run:

#### Manually:

        rsync -av vendor/asti/weather/config ./

        rsync -av vendor/asti/weather/view ./

        rsync -av vendor/asti/weather/src ./

        rsync -av vendor/asti/weather/test ./

#### Or simply: 

        bash vendor/asti/weather/.anax/scaffold/postprocess.d/100_weather.bash

## Add API-key
You need to use your own API key from [Open Weather](https://openweathermap.org/api). Add you key in the config/weather.php file as a value to the key "API-key".
You need to use your own API key from [IP stack](http://api.ipstack.com). Add you key in the config/location.php file as a value to the key "API-key".



#### Update your .gitignore with the following line in your Anax base:

/config/weather.php
/config/location.php


#### Update your navigation: 
Add IP and Weather to your navbar via config/navbar/header.php and via config/navbar/responsive.php

You will need to insert the following lines of code into the items-key in the above files.

        [
            "text" => "Väder",
            "url" => "weather",
            "title" => "Få väderprognos",
        ],
        [
            "text" => "VäderAPI",
            "url" => "weather_api",
            "title" => "Få väderprognos",
        ],
