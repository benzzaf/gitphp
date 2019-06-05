<?php
$access_token = '94JP5RNqXKiuLy5PK0YJ1sBN0lOcLzCGmSNEN2AGhmsxuQmdgpG1boq6NWtQdTZbHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN93ShJ95GVF7aqjGnNUqeOHrwY47fezQerfVxIqN00xOpQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
