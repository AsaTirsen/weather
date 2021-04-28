# weather
Anax module for weather services and IP validation
This module has been created for the course Webbaserade ramverk och designmönster at Blekinge Tekniska Högskola, fall 2020. The module is meant to be incorporated with the Anax framework.

Usage
Step 1: Install the module using composer.
composer require artes/weather

Step 2: Integrate the module into your Anax base by copying the necessary files
# Go to the root of your Anax base repo and run these two commands

rsync -av vendor/asti/weather/config ./

rsync -av vendor/asti/weather/view ./

Run even these commands if you want to execute the unit tests of the module with make test from the root of you Anax base.

rsync -av vendor/asti/weather/src ./

rsync -av vendor/asti/weather/test ./

Step 3: Add your API-keys
The module makes use of ipstack and openweathermap to provide the user with information about a given IP-address or about a valid pair of geographical coordinates.

Create an account on both sites and save your API-keys in config/api/apikeys.php according to the instructions in the comments. If you miss this step certain classes may not work as expected.

Step 4: Protect your API-keys
Update your .gitignore with the following line in your Anax base.

/config/api

Step 5: Update your navbar
Add IP and Weather to your navbar via config/navbar/header.php and via config/navbar/responsive.php

You will need to insert the following lines of code into the items-key in the above files.

`>[ 
  "text" => "Väder",   
  "url" => "weather",  
  "title" => "Få väderprognos",  
],
>
>[
   "text" => "VäderAPI",
   "url" => "weather_api",
   "title" => "Få väderprognos",
],`
