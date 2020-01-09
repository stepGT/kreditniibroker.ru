<?php
$to = "stepgt@mail.ru";
$subject = "Заявку на бесплатную консультацию";
//
$message = "<p>Имя: $_POST[name]</p>";
$message .= "<p>Телефон: +7$_POST[phone]</p>";
$message .= "<p>Сумма: $_POST[summ] руб.</p>";
$message .= "<p>Срок: $_POST[time] мес.</p>";
//
$header = "From:abc@somedomain.com \r\n";
$header .= "Cc:stepgs@yandex.ru \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
//
$retval = mail($to, $subject, $message, $header);

if ($retval == TRUE) {
  echo "Message sent successfully...";
}
else {
  echo "Message could not be sent...";
}
?>