<?php

/* https://api.telegram.org/bot1460634688:AAHJzzv2chQp0_L98pZJj8CNxanh1F2RYOQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$token = "1460634688:AAHJzzv2chQp0_L98pZJj8CNxanh1F2RYOQ";
$chat_id = "-406347258";

$txt = '';
foreach($_POST as $key => $value) {
  $txt .= "<b>".$key." : </b>".$value."%0A%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
   echo 'ok';
} else {
   echo "Error";
}

?>