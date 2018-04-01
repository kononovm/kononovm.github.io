<?php

$recepient = "govardrormk@gmail.com";
$sitename = "Alliam.ru";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
$message = "Имя: $name \nТелефон: $phone \nE-Mail: $mail";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");