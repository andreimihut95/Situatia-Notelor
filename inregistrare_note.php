<?php
	session_start();
	$connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
	$idp = $_POST['idstudent'];
	$idmat = $_POST['idmaterie'];
  $nota = (int)$_POST['nota'];
  $db = mysql_select_db("proiect", $connection);
 
  $UserNameID = mysql_query("SELECT UserNameID from username where UserNameID = '$idp'") or die("Eroare: ".mysql_error());
  $IdMaterie = mysql_query("SELECT IdMaterie from materii where IdMaterie = '$idmat'") or die("Eroare: ".mysql_error());
  
  $rowID = mysql_fetch_assoc($UserNameID);
  $rowMat = mysql_fetch_assoc($IdMaterie);

  $cetrebuie = $rowID['UserNameID'];
  $cetrebuie2 = $rowMat['IdMaterie'];
  
  $query = mysql_query("SELECT * from note where UserNameID='$cetrebuie' and IdMaterie='$cetrebuie2'")
        or die(mysql_error());
  $row = mysql_fetch_assoc($query);
  if(isset($row['UserNameID']) || isset($row['$IdMaterie']))
  {
       mysql_close($connection);
       header("location: Adauga_Nota#Duplicat");
  }
  else
      {
        if(isset($cetrebuie) && isset($cetrebuie2))
        {
            $query = mysql_query("INSERT INTO note(UserNameID , IdMaterie , Nota) 
   	                      VALUES ('$idp' , '$idmat' , '$nota')") 
                         or die("Eroare: ".mysql_error());
      

           mysql_close($connection);
           header("location: Adauga_Nota#Success");
        }
        else
        {
           mysql_close($connection);
           header("location: Adauga_Nota#Esec");
        }
}
?>