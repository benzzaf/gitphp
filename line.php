 <?php
  

function send_LINE($msg){
 $access_token = '94JP5RNqXKiuLy5PK0YJ1sBN0lOcLzCGmSNEN2AGhmsxuQmdgpG1boq6NWtQdTZbHhMmK/K0oiXF/ry+8Nkg/QarCOgaDJC/zisE8TSqN93ShJ95GVF7aqjGnNUqeOHrwY47fezQerfVxIqN00xOpQdB04t89/1O/w1cDnyilFU='; 

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
      $proxyauth = 'fixie:sCOlYQgVj69AFz2';
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
      curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
