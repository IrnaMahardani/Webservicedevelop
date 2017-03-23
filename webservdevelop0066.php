<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/8d86474392050bc6/geolookup/conditions/q/Indonesia/Tangerang.json");
  $parsed_json = json_decode($json_string);
  $city = $parsed_json->current_observation->display_location->city;
  $airport = $parsed_json->current_observation->observation_location->full;
  $zona = $parsed_json->current_observation->local_tz_short;
  $cuaca = $parsed_json->current_observation->weather;
 
  echo
  "Kota : $city </br>
  Nama Bandara : $airport  </br>
  Zona waktu : $zona </br> 
  Cuaca : $cuaca \n";
?>