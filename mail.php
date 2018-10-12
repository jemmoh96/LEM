<?php
$from=$_POST['E-mail'];
$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];
mail($email, $subject, $message,"From".$from);
print"Mail sent";
?>