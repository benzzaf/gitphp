<?php
$access_token = 'RJ+muwKNhivM+gk/UnitM48evnEEHv4gNORhSO0JMatO7qXUPdMo+JiqHkmLzP0jHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN93ETIkCi5mRYf09qonlr/XsrgITrhiBeBKR+It4iYsKsAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/bot/message/push';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
