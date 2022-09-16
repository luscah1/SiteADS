<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "archdocs.senai@gmail.com";

mail($recipient, $tel, $message, $mailheader) or die("Error!");
?>