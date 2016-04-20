<?php
	session_start();
	$connection = mysql_connect("localhost", "root", "") or die("Could not connect database");
	$name = $_POST['nume'];
	$name2 =  $_POST['prenume'];
	$cod = $_POST['cnp'];
	$sri = $_POST['serie'];
	$tel = $_POST['telefon'];
	$mail = $_POST['email'];
	$fac = "AC";
	$sec = $_POST['sectia'];
	$anul = $_POST['an'];
    $db = mysql_select_db("proiect", $connection);
    $id = (substr($name , 0 , 1)).(substr($name2, 0 , 1)).(substr($sri, 2 , 6));
    $user = (strtolower($name)).".".(strtolower($name2)).(substr($cod, 1, 2));
     $queryv = mysql_query("SELECT * from username where UserNameID='$id'")
        or die(mysql_error());
  	$row = mysql_fetch_assoc($queryv);
  	if(isset($row['UserNameID']))
  	{
		mysql_close($connection);
   	    header("location: Adauga_Student#Duplicat");  		
  	}
  	else
  	{
    	$query = mysql_query("INSERT INTO username(UserNameID,userName, pass, Nume, Prenume, CNP, Serie_Buletin, Numar_telefon, Email, Facultate, Sectia, An) 
   	                    VALUES ('$id','$user', '$cod' , '$name' , '$name2' ,'$cod',
   	                    		'$sri' , '$tel' , '$mail' , '$fac' , '$sec' , '$anul')") 
                        or die("Eroare: ".mysql_error());
   

 	    mysql_close($connection);
   	    header("location: Adauga_Student#Success");
   	}

?>