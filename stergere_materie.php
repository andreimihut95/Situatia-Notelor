<?php
	  session_start();
  	$connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
	  $mat = $_POST['materie'];
    $db = mysql_select_db("proiect", $connection);
    $query = mysql_query("SELECT IdMaterie from materii where IdMaterie = '$mat'") or die("Error".mysql_error());
    $row = mysql_fetch_assoc($query);
    $cetrebuie = $row['IdMaterie'];
    if(isset($cetrebuie))
    {
        mysql_query("DELETE FROM note where IdMaterie = '$mat'") or die("Eroare: ".mysql_error());
        mysql_query("DELETE FROM materii where IdMaterie = '$mat'") or die("Eroare: ".mysql_error());
        mysql_close($connection);
        header("location: Sterge_Materie#Success");
    }
    else
    {
        mysql_close($connection);
        header("location: Sterge_Materie#Esec");
    }

?>