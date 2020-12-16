<?php

/* https://api.telegram.org/bot1478529028:AAFC9B8xzDEmG0Fv8Ckeu41okBFGDyhMlgE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$token = "1478529028:AAFC9B8xzDEmG0Fv8Ckeu41okBFGDyhMlgE";
$chat_id = "-1001452271583";

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