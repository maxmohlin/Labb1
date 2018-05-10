
<?php include ("phpValidation.php?"); ?>

<html>
  <meta charset="utf-8">
  <link href="main.css" rel="stylesheet">

  <body>
    <h3>Kommentarsfält</h3>
    <div class="container">

      <form name="KommentarsFormular" method="POST" onsubmit="return validateForm()" action="Action.php"
        <fieldset>
          <legend> Personlig Information </legend>

          <label for="Fnamn"> Förnamn </labe>
        <input type="text" name="Fnamn" placeholder="Fyll i ditt förnnamn...">
          <span> <?php $name_error ?></span>

        <label for="lastname"> Efternamn </label>
          <input type="text" name="Lnamn" placeholder="Fyll i ditt efternamn...">
            <span> <?php $name_error ?></span>

          <lable for="Email"> Email </lable>
          <input type="text" name="Email" placeholder="Fyll i din email...">
              <span> <?php $email_error ?></span>
        </fieldset>

        <lable for="CommentSection"> Kommentar</lable>
        <textarea name="kommentar" placeholder="Denna text lär försvinna">  </textarea>

        <input type="submit" name="submitComment" value="Skicka Kommentar">

      </form>
      <!-- HÄR SLUTAR FORMULÄRET -->
    </div>
    <h3> Kommentarer </h3>
    <br>
    <?php
      include "display.php";
     ?>
    <script src="main.js"></script>
  </body>

</html>
