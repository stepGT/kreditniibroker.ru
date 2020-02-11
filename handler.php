<?php
$to      = "22012764@mail.ru, 101@businessinvest24.ru";
$subject = "Заявка на бесплатную консультацию kreditniibroker.ru";
//
$message  = "<p>Имя: $_POST[name]</p>";
$message .= "<p>Телефон: $_POST[phone]</p>";
$message .= "<p>Сумма: $_POST[summ] руб.</p>";
$message .= "<p>Срок: $_POST[time] (лет)</p>";
//
$header  = "From:robot@kreditniibroker.ru \r\n";
$header .= "Cc:101@businessinvest24.ru \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
//
mail($to, $subject, $message, $header);
?>