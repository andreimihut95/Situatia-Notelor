<?php
	session_start();
	if(isset($_SESSION['username']))
   		if($_SESSION['username'] == "admin")
	{			
			$connection = mysql_connect("localhost", "root", "") or die("Could not connect database".mysql_error());
			$db = mysql_select_db("proiect", $connection);
			$query = mysql_query("SELECT * FROM username WHERE 1") or die("Eroare".mysql_error());
		    echo '<link rel="stylesheet" href="css/style2_table.css">';
			echo '<table>
				  <tr class="odd">
				  <th>UserNameID</th>
			      <th>Username</th>
			      <th>Nume</th>
			      <th>Prenume</th>
			      <th>CNP</th>
			      <th>Serie Buletin</th>
			      <th>Numar Telefon</th>
			      <th>Email</th>
			      <th>Sectie</th>
			      <th>AN</th>
				  </tr>';
			if($query = mysql_query("SELECT * FROM username WHERE 1 ORDER by An,Nume"))
			{
				while($row = mysql_fetch_assoc($query))
				{
					echo "<tr>";
					echo "<td>" . $row['UserNameID'] . "</td>";
					echo "<td>" . $row['userName'] . "</td>";		
					echo "<td>" . $row['Nume'] . "</td>";		
					echo "<td>" . $row['Prenume'] . "</td>";		
					echo "<td>" . $row['CNP'] . "</td>";		
					echo "<td>" . $row['Serie_Buletin'] . "</td>";		
					echo "<td>" . $row['Numar_telefon'] . "</td>";		
					echo "<td>" . $row['Email'] . "</td>";				
					echo "<td>" . $row['Sectia'] . "</td>";
					echo "<td>" . $row['An'] . "</td>";
					echo "</tr>";					
				}
				mysql_free_result($query);
			}
			mysql_close($connection);
			}
		   else
    echo "<script type='text/javascript'>window.location='404';</script>";
	else
    echo "<script type='text/javascript'>window.location='404';</script>";
?>	