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
    <title>Modificare Student</title>
    <link rel="stylesheet" href="css/style_modificas.css">
    <script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    <script type="text/javascript"> ';
    echo " 
    jQuery(document).ready(function(){
      $('#cnp').autocomplete({
        source:'suggest_modificare.php',
        minLength:1,
        select:function(evt, ui)
        {
               this.form.nume.value = ui.item.nume;
               this.form.prenume.value = ui.item.prenume;
               this.form.cnp2.value = ui.item.cnp2;
               this.form.serie.value = ui.item.serie;
               this.form.telefon.value = ui.item.telefon;
               this.form.mail.value = ui.item.mail;
               this.form.sectie.value = ui.item.sectie;
               this.form.an.value = ui.item.an;
        }
      });
    });";
  echo '
   </script> 
   <link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 
   <style type="text/css"><!--
  
          /* style the auto-complete response */
          li.ui-menu-item { font-size:15px !important; }
  
  --></style>
  </head>
  <body>
    <div class="modificas-card">
    <h1>Modificare Student</h1>
    <br>
    <form method="POST" action="modificares_bazadedate.php">
      <div class="Detalii">
          CNP:<input id="cnp" type="text" name="cnp" placeholder="Introduceti CNP" required maxlength=13 required maxlength=13 required pattern="[1-25-9]{1}[0-9]{12}" title="CNP-ul contine doar 13 cifre. Atentie sa inceapa cu cifrele 1,2,5,6,7,8 sau 9">
          <br><br><br>
          Nume:<input id="nume" type="text" name="nume" placeholder="Introduceti numele" required  pattern="[A-Z]{1}[a-z]{2,29}" title="Numele poate fi de minim 3 litere sau maxim 30 litere, se incepe cu litera mare si restul litere mici">
          Prenume:<input id="prenume" type="text" name="prenume" placeholder="Introduceti prenumele" required  pattern="[A-Z]{1}[a-z]{2,29}" title="Prenumele poate fi de minim 3 litere sau maxim 30 litere, se incepe cu litera mare si restul litere mici">
          CNP:<input id="cnp2" type="text" name="cnp2" placeholder="Introduceti CNP" required maxlength=13 required maxlength=13 required pattern="[1-25-9]{1}[0-9]{12}" title="CNP-ul contine doar 13 cifre. Atentie sa inceapa cu cifrele 1,2,5,6,7,8 sau 9">
          Serie buletin:<input id="serie" type="text" name="serie" placeholder="Introduceti serie buletin" required required maxlength=8  pattern="[A-Z]{2}[0-9]{6}" title="Seria are 8 caractere(litere mari si cifre)">
          Numar telefon:<input id="telefon" type="text" name="telefon" placeholder="Introduceti numar telefon" required maxlength=16 pattern="[0-9+() ]{10,15}" title="Minim 10 cifre, maxim 16 cifre inclusiv caracterele + , ( , )">
          Email:<input id="mail" type="email" name="email" placeholder="Introduceti mail-ul" required>
          Sectia:<input id="sectie" list="Sectii" name="sectia" placeholder="Sectia" required pattern="[C]{1}[T]{1}[I]{1}|[C]{1}[T]{1}[I]{1}[(]{1}[E]{1}[N]{1}[)]{1}|[I]{1}[S]{1}" title="Sa fie din sectiile CTI, CTI(EN) sau IS">
            <datalist id = "Sectii">
                <option value="CTI">
                <option value="CTI(EN)">
                <option value="IS">
              </datalist>
          Anul:<input id="an" list="AN" name="an" placeholder="Anul curent" required required pattern="[1-4]{1}" title="Introduceti doar din intervalul [1,4]">
            <datalist id = "AN">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
              </datalist>
      </div>
      <input type="submit" name="submit" class="modificas modificas-submit" value="Modifica">
    </form>
    <div class="modificas-help">
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
