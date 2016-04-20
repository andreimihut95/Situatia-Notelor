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
    <title>Note</title>
    <link rel="stylesheet" href="css/style_note.css">
    <script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    <script type="text/javascript"> 
 
    jQuery(document).ready(function(){';
    echo   "$('#idstudent').autocomplete({source:'suggest_adaugnotes', minLength:1});
      $('#idmaterie').autocomplete({source:'suggest_adaugnotem.php', minLength:1});
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
    <div class="note-card">
    <h1>Note</h1>
    <br>
    <form method="POST" action="inregistrare_note.php">
      <div class="Detalii">
          ID Student:<input id="idstudent" type="text" name="idstudent" placeholder="Introduceti id-ul pentru student" required maxlength=8 pattern="[A-Z]{2}[0-9]{6}" title="Contine 2 litere mari si 6 cifre">
          ID materie:<input id="idmaterie" type="text" name="idmaterie" placeholder="Introduceti id-ul pentru materie" required pattern="[A-Z]{1,10}" title="Contine doar litere mari">
          Nota:<input type="text" name="nota" placeholder="Introduceti nota" required maxlength=2 pattern="[1-9]{1}|[1]{1}[0]{1}" title="Notele sunt de la 1 la 10">
      </div>
      <input type="submit" name="submit" class="note note-submit" value="Inregistreaza">
    </form>
    <div class="note-help">
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
