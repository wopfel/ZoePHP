<?php
//Name for your Renault Zoe (shows as heading)
$zoename = 'Renault Zoe';

//Your Renault Zoe model: 1 for Ph1 or 2 for Ph2
$zoeph = 1;

//Login to My Renault
$username = 'your@mailadress.com';
$password = 'My_password';

//VIN of your Renault Zoe
$vin = 'VF1...';

//Save data in database.csv: Y for yes or N for no
$save_in_db = 'N';

//If battery level is reached:
//Send mail: Y for yes or N for no
$mail_bl = 'N';
//Execute command, e.g. 'bash hello.sh'
$exec_bl = '';
//Activate charging schedule to stop charging: Y for yes or N for no
$cmon_bl = 'N';

//If charging is finished:
//Send mail: Y for yes or N for no
$mail_csf = 'N';
//Execute command, e.g. 'bash hello.sh'
$exec_csf = '';

//Using cron: Request index.php?cron or php ../index.php cron
//Minimum time interval in minutes between two requests if the car isn't charging
$cron_ncs = 60;
//Minimum time interval in minutes between two requests if the car charging
$cron_acs = 15;

//openweathermap.org API key for requesting weather data (only Ph2)
//More information: https://openweathermap.org/appid
$weather_api_key = '';

//Registration country of your Renault Zoe
//Deutschland: DE
//Österreich: AT
//Sverige: SE
//United Kingdom: GB
$country = 'DE';
?>
