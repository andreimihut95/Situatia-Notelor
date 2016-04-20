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
    <title>Stergere Materie</title>
    <link rel="stylesheet" href="css/style_stergem.css">
    <script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    <script type="text/javascript"> 
 
    jQuery(document).ready(function(){';
     echo " $('#idmaterie').autocomplete({source:'suggest_adaugnotem.php', minLength:1});
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
    <div class="stergem-card">
    <h1>Stergere Materie</h1>
    <br>
    <form method="POST" action="stergere_materie.php">
      <div class="Detalii">
           Materie:<input id="idmaterie" type="text" name="materie" placeholder="Introduceti ID-ul materiei de sters" required pattern="[A-Z]{1,10}" title="Contine doar litere mari">
      </div>
      <input type="submit" name="submit" class="stergem stergem-submit" value="Sterge">
    </form>
    <div class="stergem-help">
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
