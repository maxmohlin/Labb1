<?php
// define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fnamn"])) {
    $name_error = "Du måste fylla i ditt namn";
  } else {
    $name = test_input($_POST["Fnamn"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Endast bokstäver eller mellanslag";
    }
  }

  if (empty($_POST["Lnamn"])) {
    $name_error = "Du måste fylla i ditt efternamn";
  } else {
    $name = test_input($_POST["Lnamn"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Endast bokstäver eller mellanslag";
    }
  }

  if (empty($_POST["Email"])) {
    $email_error = "Du måste fylla i en e-mail";
  } else {
    $email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Ogiltig e-mail";
    }
  }

  if (empty($_POST["kommentar"])) {
    $message = "";
  } else {
    $message = test_input($_POST["kommentar"]);
  }

  if ($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
