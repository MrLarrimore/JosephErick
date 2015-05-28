<?php

require_once (__DIR__ . "/../model/config.php");


$from="jojo013600@kronkmail.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


mail($email, $subject, $message, "From:".$from);
print 'your message has been sent: </br>$email</br>$subject</br>$message</p>';