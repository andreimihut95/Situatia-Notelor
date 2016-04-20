<?php
	  session_start();
	  $connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
	  $stud = $_POST['student'];
    $db = mysql_select_db("proiect", $connection);
    $query = mysql_query("SELECT UserNameID FROM username where userName = '$stud'") 
                             or die("Eroare: ".mysql_error());
    $row = mysql_fetch_assoc($query);
    $cetrebuie = $row['UserNameID'];
    if(isset($cetrebuie))
   {
       mysql_query("DELETE FROM username where userName = '$stud'") 
                           or die("Eroare: ".mysql_error());
       mysql_query("DELETE FROM note where UserNameID = '$cetrebuie'") 
                        or die("Eroare: ".mysql_error());
       mysql_close($connection);
       header("location: Sterge_Student#Success");
   }
   else
   {
       mysql_close($connection);
       header("location: Sterge_Student#Esec");
   }
?>