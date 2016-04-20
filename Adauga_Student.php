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
          <title>Formular</title>
          <link rel="stylesheet" href="css/style_formular.css">
        </head>
        <body>
          <div class="formular-card">
          <h1>Formular</h1>
          <br>
          <form method="POST" action="inregistrare_bazadedate.php">
            <div class="Detalii">
                Nume:<input type="text" name="nume" placeholder="Introduceti numele" required  pattern="[A-Z]{1}[a-z]{2,29}" title="Numele poate fi de minim 3 litere sau maxim 30 litere, se incepe cu litera mare si restul litere mici">
                Prenume:<input type="text" name="prenume" placeholder="Introduceti prenumele" required  pattern="[A-Z]{1}[a-z]{2,29}" title="Prenumele poate fi de minim 3 litere sau maxim 30 litere, se incepe cu litera mare si restul litere mici">
                CNP:<input type="text" name="cnp" placeholder="Introduceti CNP" required maxlength=13 required maxlength=13 required pattern="[1-25-9]{1}[0-9]{12}" title="CNP-ul contine doar 13 cifre. Atentie sa inceapa cu cifrele 1,2,5,6,7,8 sau 9">
                Serie buletin:<input type="text" name="serie" placeholder="Introduceti serie buletin" required required maxlength=8  pattern="[A-Z]{2}[0-9]{6}" title="Seria are 8 caractere(litere mari si cifre)">
                Numar telefon:<input type="text" name="telefon" placeholder="Introduceti numar telefon" required maxlength=16 pattern="[0-9+() ]{10,15}" title="Minim 10 cifre, maxim 16 cifre inclusiv caracterele + , ( , )">
                Email:<input type="email" name="email" placeholder="Introduceti mail-ul" required>
                Sectia:<input list="Sectii" name="sectia" placeholder="Sectia" required pattern="[C]{1}[T]{1}[I]{1}|[C]{1}[T]{1}[I]{1}[(]{1}[E]{1}[N]{1}[)]{1}|[I]{1}[S]{1}" title="Sa fie din sectiile CTI, CTI(EN) sau IS">
                  <datalist id = "Sectii">
                      <option value="CTI">
                      <option value="CTI(EN)">
                      <option value="IS">
                    </datalist>
                Anul:<input list="AN" name="an" placeholder="Anul curent" required required pattern="[1-4]{1}" title="Introduceti doar din intervalul [1,4]">
                  <datalist id = "AN">
                      <option value="1">
                      <option value="2">
                      <option value="3">
                      <option value="4">
                    </datalist>
            </div>
            <input type="submit" name="submit" class="formular formular-submit" value="Inregistreaza">
          </form>
          <div class="formular-help">
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