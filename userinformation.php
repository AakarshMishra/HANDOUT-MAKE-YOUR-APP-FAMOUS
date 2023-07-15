<?php

$connection = mysqli_connect('localhost','root','','handoutdatabase');

mysqli_select_db($connection,"handoutdatabase");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>