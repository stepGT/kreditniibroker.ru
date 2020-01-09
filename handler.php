<?php
$to = "stepgt@mail.ru";
$subject = "Заявку на бесплатную консультацию";

$message = "<p>Имя:$_POST[name]</p>";
$message .= "<p>Телефон: $_POST[phone]</p>";
$message .= "<p>Сумма: ' . $_POST[summ]</p>";
$message .= "<p>Срок: ' . $_POST[time]</p>";


$header = "From:kreditniibroker.ru \r\n";
$header .= "Cc:stepgs@yandex.ru \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

if ($retval == TRUE) {
  echo "Спасибо! Ваша заявка была успешно отправлена!";
}
else {
  echo "Ошибка! Повторите попытку позже!";
}
?>