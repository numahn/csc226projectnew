<?php
//This returns HTML, PHP cannot recognize the data, but would work if it did
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com/v1/public/characters?nameStartsWith=a&limit=1&ts=1&apikey=003483fd18aaa6d070638c87d5ecff50&hash=b6c6651270e73c445980fedaa6fb252e");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_HTTPHEADER, [
  //  'Access-Control-Allow-Origin: http://localhost:3001'
//]);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$output = curl_exec($ch);
curl_close($ch);

//$response = json_decode($output);
//echo $output;
//$arr = array_map('utf8_encode', $output);
//$json = json_encode($output, JSON_UNESCAPED_UNICODE);
$response = json_decode($output);
$json = json_encode($response);
echo $json;
//$name = $response->data->results;
//$jsondata = json_encode($name);
//echo $response;


?>