<?php
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$to = "sweetlipsua@gmail.com";
$subject = "Форма дистрибьюторов на sweetlips.com.ua";
$body = "От: $email\nИмя: $name\nТема: $title\n\nСообщение: $message";

$a = mail($to, $subject, $body);

echo "<script type='text/javascript'>window.top.location='http://sweetlips.com.ua';</script>";