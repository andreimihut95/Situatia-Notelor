<?php
  function literemari($str)
  {
    if(preg_match_all('#([A-Z]+)#',$str,$matches))
        return implode('',$matches[1]);
    else
        return false;
  }
	session_start();
	$connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
	$mat = $_POST['materie'];
  $an = $_POST['an'];
  $sem = $_POST['sem'];
  $profesor = $_POST['profesor'];
  $emailp = $_POST['emailp'];
  $id = literemari($mat);
  $db = mysql_select_db("proiect", $connection);
  $queryv = mysql_query("SELECT * from materii where IdMaterie='$id'")
        or die(mysql_error());
  $row = mysql_fetch_assoc($queryv);
  if(isset($row['IdMaterie']))
  {
    mysql_close($connection);
    header("location: Adauga_Materie#Duplicat");
  }
  else
  {
     $query = mysql_query("INSERT INTO materii(IdMaterie,Materie,An,Semestru,Profesor,Mail) 
   	                    VALUES ('$id','$mat','$an','$sem','$profesor','$emailp')") 
                        or die("Eroare: ".mysql_error());
     mysql_close($connection);
     header("location: Adauga_Materie#Success");
  }
?>