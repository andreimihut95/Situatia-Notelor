<?php
			session_start();
			if(isset($_SESSION['username']) && $_SESSION['username'] != "admin" )
			{
			$connection = mysql_connect("localhost", "root", "") or die("Could not connect database".mysql_error());
			$db = mysql_select_db("proiect", $connection);
			echo '<link rel="stylesheet" href="css/style_numerotare.css">';
			echo '<table class="table-fill">
				  <tr class="odd">
				  <th>IdMaterie</th>
			      <th>Nume Materie</th>
			      <th>An</th>
			      <th>Semestru</th>
			      <th>Profesor</th>
			      <th>Mail Profesor</th>
				  </tr>';
			if($query = mysql_query("SELECT * FROM materii WHERE 1 ORDER by An,Semestru,Materie"))
			{
				while($row = mysql_fetch_assoc($query))
				{
					echo "<tr>";
					echo "<td>" . $row['IdMaterie'] . "</td>";
					echo "<td>" . $row['Materie'] . "</td>";		
					echo "<td>" . $row['An'] . "</td>";
					echo "<td>" . $row['Semestru'] . "</td>";
					echo "<td>" . $row['Profesor'] . "</td>";	
					echo "<td>" . $row['Mail'] . "</td>";		
					echo "</tr>";					
				}
				mysql_free_result($query);
			}
			mysql_close($connection);
		}
		else
		 echo "<script type='text/javascript'>window.location='404.php';</script>";
 ?>	