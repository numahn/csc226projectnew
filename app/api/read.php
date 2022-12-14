<?php

$ch = curl_init();
$ts = isset($_GET['ts']) ? $_GET['ts'] : die();
$apikey = isset($_GET['apikey']) ? $_GET['apikey'] : die();
$hash = isset($_GET['hash']) ? $_GET['hash'] : die();

curl_setopt($ch, CURLOPT_URL, 'http://gateway.marvel.com/v1/public/characters?ts='.$ts.'&apikey='.$apikey.'&hash='.$hash);
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
$result = curl_exec($ch);


print_r($result);
curl_close($ch);




?>