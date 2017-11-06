<?php

$recepient = "dreamsfallstudio@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["tel"]);
$mail = trim($_POST["mail"]);
$textarea = trim($_POST["area"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nТекст: $mail \nСообщение: $textarea";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");