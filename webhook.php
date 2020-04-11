<?

  $botToken - "1200459306:AAGLwtKTBtuzGqTUeuQrCzvuF5L0NJGgnGc";
  $website = "https://api.telegram.org/bot".$botToken;

  $update = file_get_contents('php://input');
  $update = json_decode($update, TRUE);

  $chatId = $update["message"]["chat"]["id"];
  $chatType = $update["message"]["chat"]["type"];

  $message = $update["message"]["text"];

  switch ($message) {
    case '/ayuda':
      $response = "Prueba";
      sendMessage($chatId, $response);
      break;
    case '/nueva':

      break;
  }

  function sendMessage($chatId, $message){
    $url = %GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
    file_get_contents($url);
  }

?>
