<?php
	  session_start();
	  $connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
	  $cnp = $_POST['cnp'];
    $name = $_POST['nume'];
    $name2 =  $_POST['prenume'];
    $cod = $_POST['cnp2'];
    $sri = $_POST['serie'];
    $tel = $_POST['telefon'];
    $mail = $_POST['email'];
    $fac = "AC";
    $sec = $_POST['sectia'];
    $anul = $_POST['an'];
    $db = mysql_select_db("proiect", $connection);
    $id = (substr($name , 0 , 1)).(substr($name2, 0 , 1)).(substr($sri, 2 , 6));
    $user = (strtolower($name)).".".(strtolower($name2)).(substr($cod, 1, 2));
    $query = mysql_query("SELECT CNP FROM username where CNP = '$cnp'") 
                             or die("Eroare: ".mysql_error());
    $row = mysql_fetch_assoc($query);
    $cetrebuie = $row['CNP'];
    if(isset($cetrebuie))
   {
       $query = mysql_query("UPDATE username set UserNameID ='$id',userName='$user', pass='$cod', Nume= '$name', Prenume='$name2', CNP='$cod', Serie_Buletin='$sri', Numar_telefon='$tel', Email='$mail', Facultate='$fac', Sectia='$sec', An='$anul' WHERE CNP='$cnp'") 
                        or die("Eroare: ".mysql_error()); 
       mysql_close($connection);
       header("location: Modificare_Student#Success");
   }
   else
   {
       mysql_close($connection);
       header("location: Modificare_Student#Esec");
   }
?>