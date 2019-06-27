 <?php
  

function send_LINE($msg){
 $access_token = 'tKW7bZdGyAVwLEp14g+VZL6hHm/OOiRRdWcgEFzPJk+pxnXwoY5/NpHhFQ88ESCVHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN90c8R+hYnOMX4K51eFZuIdjjC5nlxzQBee4NZv6pg10uQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U7b23c10452e7c920fa81a56146618478',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $proxy = 'velodrome.usefixie.com:80';
      $proxyauth = 'fixie:q6ed72HTrIQc1jU';
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
      curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
