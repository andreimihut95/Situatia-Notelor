<?php
  $connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
  $idmat = $_POST["idmaterie"];
  $idstud = $_POST['idstudent'];
  $nota = $_POST['nota'];
  $db = mysql_select_db("proiect", $connection);
  $query = mysql_query("SELECT IdMaterie from note where IdMaterie = '$idmat' and UserNameID = '$idstud'") or die("Error".mysql_error());
  $row = mysql_fetch_assoc($query);
  $cetrebuie = $row['IdMaterie'];
  if(isset($cetrebuie))
  {
	  if($nota == 0)
       mysql_query("DELETE from note WHERE IdMaterie='$idmat' and UserNameID = '$idstud'") or die("Eroare: ".mysql_error());
      else
			mysql_query("UPDATE note set Nota = '$nota' WHERE IdMaterie='$idmat' and UserNameID = '$idstud'") or die("Eroare: ".mysql_error());
	   mysql_close($connection);
       header("location: Modificare_Note#Success");
 }
 else
 {
        mysql_close($connection);
        header("location: Modificare_Note#Esec");
 }
?>