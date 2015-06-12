<?php

function get_data($url) {
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_URL, $url);
   $return = curl_exec($ch);
   curl_close($ch);

   return $return;
}

//Add your api & key to the url below
//Request a key from http://smsmybus.com/ 
$url = "";

echo get_data($url);
