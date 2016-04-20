<?php
session_start();
if(isset($_SESSION['username']))
   if($_SESSION['username'] == "admin")
{
      echo '
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Materie</title>
    <link rel="stylesheet" href="css/style_materie.css">
  </head>
  <body>
    <div class="materie-card">
    <h1>Materie</h1>
    <br>
    <form method="POST" action="inregistrare_materie.php">
      <div class="Detalii">
          Nume materie:<input type="text" name="materie" placeholder="Introduceti numele materiei" required pattern="[A-Z]{1}[a-zA-Z ]{2,100}" title="Numele poate fi de minim 3 caractere, se incepe cu litera mare">
          Anul:<input list="AN" name="an" placeholder="Anul materiei" required required pattern="[1-4]{1}" title="Introduceti doar din intervalul [1,4]">
            <datalist id = "AN">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
              </datalist>
          Semestrul:<input list="semestru" name="sem" placeholder="Semestrul" required required pattern="[1-2]{1}" title="Introduceti doar din intervalul [1,2]">
            <datalist id = "semestru">
                <option value="1">
                <option value="2">
              </datalist>
          Profesor materie:<input type="text" name="profesor" placeholder="Introduceti numele profesorului" required pattern="[A-Z]{1}[a-zA-Z ]{2,100}" title="Numele poate fi de minim 3 caractere, se incepe cu litera mare">
          Mail profesor:<input type="email" name="emailp" placeholder="Introduceti mail-ul" required>
      </div>
      <input type="submit" name="submit" class="materie materie-submit" value="Inregistreaza">
    </form>
    <div class="materie-help">
       <a href="Administrator">Back</a>
    </div>
</div>
</body>
</html>';
   }
   else
    echo "<script type='text/javascript'>window.location='404';</script>";
  else
    echo "<script type='text/javascript'>window.location='404';</script>";
?>
