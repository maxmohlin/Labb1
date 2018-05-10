<?php

include "connect.php";



// _________________________________

$fnamn = $mysqli->real_escape_string($_REQUEST['Fnamn']);
$lnamn = $mysqli->real_escape_string($_REQUEST['Lnamn']);
$email = $mysqli->real_escape_string($_REQUEST['Email']);
$kommentar = $mysqli->real_escape_string($_REQUEST['kommentar']);

$sql = "INSERT INTO kommentarer (förnamn, efternamn, email, kommentar)
VALUES ('$fnamn', '$lnamn', '$email', '$kommentar')";

  $result = $mysqli->query($sql);
  header("Location: {$_SERVER['HTTP_REFERER']}");
  exit;

// Close connection
$mysqli->close(); //KOLLA om denna måste ligga innan header funktionen


?>
