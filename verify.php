<?php
$access_token = 'r+wV7hFjna9UknsoAIu/nRjuUqZEjecY5CoxDmubM/kl6D6q60WehYLtvqJ1euQQHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN90f82GxuCqG9c/2SG8EJTmF7RpmtY2Vt5PIy3NzAqesIwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
