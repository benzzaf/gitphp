<?php
$access_token = 'aWZCpXuMh8l/2zcOD5/HkXqLYNzToQPpe8510Yo35QdeNK+6oIAh2qTEvEV4IPZHHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN9106R667RJJ88bWztL+IO66gG6qxPQOHL3AB7w/euG9dwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/bot/message/push';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
