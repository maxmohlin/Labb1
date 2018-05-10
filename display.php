<?php
include "connect.php";

$sql = "SELECT * FROM kommentarer";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()){
echo "<div>";
  echo "<fieldset>";
  echo "<legend> Personlig Information </legend>";
    echo $row['förnamn'];
    echo " ";
    echo $row['efternamn']."<br>";
    echo $row['email']."<br>";
  echo "</fieldset>";
    echo $row['kommentar']."<br>";
echo "</div>";
echo "<br>";
}

 ?>
