<?php
$user = 'root';
$password = 'root';
$db = 'Comments';
$host = 'localhost';
$port = 8889;

$mysqli = new mysqli("$host:$port",$user, $password, $db);

 if (!$mysqli) {
   die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }
?>
