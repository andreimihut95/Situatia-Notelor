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
  $idmat = $_POST["idmaterie"];
  $mat = $_POST['materie'];
  $an = $_POST['an'];
  $sem = $_POST['sem'];
  $profesor = $_POST['profesor'];
  $emailp = $_POST['emailp'];
  $id = literemari($mat);
  $db = mysql_select_db("proiect", $connection);
  $query = mysql_query("SELECT IdMaterie from materii where IdMaterie = '$idmat'") or die("Error".mysql_error());
  $row = mysql_fetch_assoc($query);
  $cetrebuie = $row['IdMaterie'];
  if(isset($cetrebuie))
  {
       mysql_query("UPDATE materii set IdMaterie='$id',Materie='$mat',An='$an',Semestru='$sem',Profesor='$profesor',Mail='$emailp' WHERE IdMaterie='$idmat'") or die("Eroare: ".mysql_error());
       mysql_close($connection);
       header("location: Modificare_Materie#Success");
 }
 else
 {
        mysql_close($connection);
        header("location: Modificare_Materie#Esec");
 }
?>