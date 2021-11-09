<?php
$to = "info@timoshenkokseniia.ru";
// $to = "timoshenko.ksenia.1998@gmail.com";
$subject = 'Request from My website';
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$message = 'Name: ' . $data['name'] . ' Message: ' . $data['message'];
$headers = "From: $email \r\nReply-To: $email\r\nContent-type: text/html; charset=UTF-8;";
$success = mail($to, $subject, $message, $headers);
if ($success) {
  // sleep(3);
  echo "Success";
} else {
  echo "Fail";
}
