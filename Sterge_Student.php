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
    <title>Stergere Student</title>
    <link rel="stylesheet" href="css/style_sterges.css">
    <script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
    <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
    <script type="text/javascript"> 
 
    jQuery(document).ready(function(){';
   echo   "$('#student').autocomplete({source:'suggest_sterges.php', minLength:1});
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
    <div class="sterges-card">
    <h1>Stergere student</h1>
    <br>
    <form method="POST" action="stergere_student.php">
      <div class="Detalii">
           Student:<input id="student" type="text" name="student" placeholder="Introduceti user-ul pentru student" required pattern="[a-z]{3,30}[.]{1}[a-z]{3,30}[0-9]{2}" title="Introduceti user sub forma nume.prenumeXX, unde XX=ultimele 2 cifre ale anului de nastere">
      </div>
      <input type="submit" name="submit" class="sterges sterges-submit" value="Sterge">
    </form>
    <div class="sterges-help">
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