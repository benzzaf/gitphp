 <?php
  

function send_LINE($msg){
 $access_token = 'RJ+muwKNhivM+gk/UnitM48evnEEHv4gNORhSO0JMatO7qXUPdMo+JiqHkmLzP0jHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN93ETIkCi5mRYf09qonlr/XsrgITrhiBeBKR+It4iYsKsAdB04t89/1O/w1cDnyilFU=; 

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
