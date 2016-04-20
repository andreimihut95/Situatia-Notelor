<?php
	session_start(); // Starting Session
	if (isset($_POST['submit'])) 
	{
		if (($_POST['username'] == "admin.admin00") && ($_POST['password'] == "admin00")) 
		{
			$_SESSION['username']="admin";
			echo "<script type='text/javascript'>window.location='Administrator';</script>";

		}	
		else
		{
// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
// Selecting Database
		$db = mysql_select_db("proiect", $connection);
// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select *from username where pass='$password' AND username='$username'", $connection);
		if($query)
			$rows = mysql_num_rows($query);
		else
			die("Something failed!!".mysql_error());
	   if ($rows == 1)
	   {
	   		$_SESSION['username'] = "$username";
	   		echo "<script type='text/javascript'>window.location='page1';</script>";
	   }
	   else
	   {
	   		
		echo '<script language="javascript">';
		echo 'alert("Ai gresit username-ul si/sau parola!\n Va rugam sa incercati din nou :)!")';
		echo '</script>';
		echo "<script type='text/javascript'>window.location='Autentificare';</script>";
	   }
	}
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	}
?>