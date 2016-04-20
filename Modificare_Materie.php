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
    <title>Modificare Materie</title>
    <link rel="stylesheet" href="css/style_modificam.css">
    <script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    <script type="text/javascript">'; 
 
    echo "jQuery(document).ready(function(){
      $('#idmaterie').autocomplete({
        source:'suggest_adaugnotem.php',
        minLength:1,
        select:function(evt, ui)
        {
               this.form.numematerie.value = ui.item.numematerie;
               this.form.sem.value = ui.item.sem;
               this.form.an.value = ui.item.an;
               this.form.prof.value = ui.item.prof;
               this.form.mail.value = ui.item.mail;
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
    <div class="modificam-card">
    <h1>Modificare Materie</h1>
    <br>
    <form method="POST" action="modificam_bazadedate.php">
      <div class="Detalii">
          ID materie:<input id="idmaterie" type="text" name="idmaterie" placeholder="Introduceti id-ul pentru materie" required pattern="[A-Z]{2,10}" title="Contine doar litere mari">
          <br><br><br>
          Nume materie:<input id="numematerie" type="text" name="materie" placeholder="Introduceti numele materiei" required pattern="[A-Z]{1}[a-zA-Z ]{2,100}" title="Numele poate fi de minim 3 caractere, se incepe cu litera mare">
          Anul:<input id="an" list="AN" name="an" placeholder="Anul materiei" required required pattern="[1-4]{1}" title="Introduceti doar din intervalul [1,4]">
            <datalist id = "AN">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
              </datalist>
          Semestrul:<input id="sem" list="semestru" name="sem" placeholder="Semestrul" required required pattern="[1-2]{1}" title="Introduceti doar din intervalul [1,2]">
            <datalist id = "semestru">
                <option value="1">
                <option value="2">
              </datalist>
          Profesor materie:<input id="prof" type="text" name="profesor" placeholder="Introduceti numele profesorului" required pattern="[A-Z]{1}[a-zA-Z ]{2,100}" title="Numele poate fi de minim 3 caractere, se incepe cu litera mare">
          Mail profesor:<input id="mail" type="email" name="emailp" placeholder="Introduceti mail-ul" required>
      </div>
      <input type="submit" name="submit" class="modificam modificam-submit" value="Modifica">
    </form>
    <div class="modificam-help">
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
