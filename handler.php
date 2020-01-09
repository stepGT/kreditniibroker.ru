<?php
$to = "stepgt@mail.ru";
//$subject = "Заявку на бесплатную консультацию";
$subject = "This is subject";

$message = "<p>NAME:$_POST[name]</p>";
$message .= "<p>PHONE: $_POST[phone]</p>";
$message .= "<p>SUMM: ' . $_POST[summ]</p>";
$message .= "<p>TIME: ' . $_POST[time]</p>";


$header = "From:abc@somedomain.com \r\n";
$header .= "Cc:stepgs@yandex.ru \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

if ($retval == TRUE) {
  echo "Message sent successfully...";
}
else {
  echo "Message could not be sent...";
}
?>