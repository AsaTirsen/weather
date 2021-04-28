# Anax module for weather forecast and history
This module can be incorporated with the [Anax framework](https://github.com/canax) to provide a service that checks weahter forecast and historical weather data
based on ip-adress. The module was created as a part of the course Webbaserade ramverk och designmönster, Blekinge Tekniska Högskola.


## To install
In your composer.json do: 
composer require asti/weather ^1.0.6

## Integrate the module
### Manually:
# From the root of your Anax repo run:

rsync -av vendor/asti/weather/config ./

rsync -av vendor/asti/weather/view ./

rsync -av vendor/asti/weather/src ./

rsync -av vendor/asti/weather/test ./

### Or simply: 

bash vendor/asti/weather/.anax/scaffold/postprocess.d/100_weather.bash

### Add API-key
You need to use your own API key from [Open Weather](https://openweathermap.org/api). Add you key in the config/weather.php file as a value to the key "API-key".
The module makes use of ipstack and openweathermap to provide the user with information about a given IP-address or about a valid pair of geographical coordinates.

Create an account on both sites and save your API-keys in config/weather.php according to the instructions in the comments. If you miss this step certain classes may not work as expected.

Step 4: Protect your API-keys
Update your .gitignore with the following line in your Anax base.

/config/api

Step 5: Update your navbar
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
