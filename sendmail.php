<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$cvmail=$_POST['cvmail'];
mail($cvmail,"Someone contact you","Name:$name
Email:$email
Message:$message");
?>