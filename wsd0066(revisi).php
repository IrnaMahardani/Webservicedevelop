<br>1. Feature Geolookup </br>

<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/geolookup/conditions/q/Indonesia/Tangerang.json");
  $parsed_json = json_decode($json_string);
  $city = $parsed_json->current_observation->display_location->city;
  $airport = $parsed_json->current_observation->observation_location->full;
  $zona = $parsed_json->current_observation->local_tz_short;
 
  echo
  "Kota : $city </br>
  Nama Bandara : $airport  </br>
  Zona waktu : $zona \n";
?>
<br><br>

<br>2. Feature Astronomy </br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/astronomy/conditions/q/Indonesia/Tangerang.json");
  $parsed_json = json_decode($json_string);
  $city = $parsed_json->current_observation->display_location->city;
  $sunrise = $parsed_json->sun_phase->sunrise->hour;
  $sunrisem = $parsed_json->sun_phase->sunrise->minute;
  $sunset = $parsed_json->sun_phase->sunset->hour;
  $sunsetm = $parsed_json->sun_phase->sunset->minute;
  $zona = $parsed_json->current_observation->local_tz_short;
 
  echo
  "Kota : $city </br>
  Matahari Terbit pukul $sunrise:$sunrisem $zona </br>
  Matahari Tenggelam pukul  $sunset:$sunsetm $zona  \n";
?>
<br><br>

<br>3. Feature Yesterday </br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/yesterday/conditions/q/Indonesia/Tangerang.json");
  $parsed_json = json_decode($json_string);
  $city = $parsed_json->current_observation->display_location->city;
  $cuaca = $parsed_json->current_observation->weather;
  $tempc = $parsed_json->current_observation->temp_c;
 
  echo
  "Kota : $city </br>
  Cuaca : $cuaca </br>
  Suhu :  $tempc <sup>O</sup> C\n";
?>