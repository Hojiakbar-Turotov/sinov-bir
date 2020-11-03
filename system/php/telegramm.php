<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$comment = $_POST['user_comment'];
$token = "1381671073:AAHrEusnKxBgqFncTp2kws7JJZaoBlMLTFI";
$chat_id = "-298729605";
$arr = array(
  '💁‍♂️ Имя пользователя: ' => $name,
  '📱 Телефон: ' => $phone,
  '🌐 Email: ' => $email,
  '📜 Отзыв клиента: ' => $comment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: telegramm/true.html');
} else {
  header('Location: telegramm/false.html');
}
?>