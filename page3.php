<?php
			session_start();
			if(isset($_SESSION['username']) && $_SESSION['username'] != "admin" )
			{
			$username = $_SESSION['username'];
			$connection = mysql_connect("localhost", "root", "");
			$username = stripslashes($username);
			$username = mysql_real_escape_string($username);
			$db = mysql_select_db("proiect", $connection);
		
			$nume_aux = mysql_query("select Nume, Prenume, UserNameID from username where userName='$username'", $connection);
			$row1 = mysql_fetch_assoc($nume_aux);
		    $Nume = $row1['Nume'];
		    $Prenume = $row1['Prenume'];
		    $usernameid = $row1['UserNameID'];
			echo '
			<!DOCTYPE html>
			<html>';
				    echo '<head>';
					echo "<title>Bun venit, " . $Nume ." ".$Prenume."</title>";
					echo '<link href="css/style_numerotare.css" rel="stylesheet" type="text/css">
				</head>
				<body>';
					echo '<a href = "informatii"> <h3 class="Inf">'."Informatii Profesori".'</h3> </a>';
					echo '<a href = "chart"> <h3 class="Inf">'."Statistica Notelor".'</h3> </a>';
					echo '<a href = "logout.php"> <h3 class="Logout">'."Logout".'</h3> </a>';
					echo '<h3 class="welcome">'."Welcome, ".$Nume." ".$Prenume.'</h3>';
					echo '<div class="table-title">
						<h3>Situatia notelor <br> Anul II, Semestrul I</h3>
					</div>';
					echo '<table class="table-fill">
					    	<thead>
								<tr>
									<th>Materie</th>
									<th>Nota finala</th>
								</tr>
						  </thead>
						  <tbody class="table-hover">';
						if($query = mysql_query("SELECT * FROM Materii WHERE 1 ORDER by An,Semestru,Materie"))
						{
							$i = 0;
							$nr = 1;
						while(($row = mysql_fetch_assoc($query)))
						{	
							if(($row['An'] == 2) && ($row['Semestru'] == 1))
							{
								$i++;
								$Nume_Materie = $row['Materie'];
						echo "<tr>";
						echo "<td>" . $row['Materie'] . "</td>";
   						$materie_aux = mysql_query("select IdMaterie from materii where Materie='$Nume_Materie'", $connection);
						$row_materie = mysql_fetch_assoc($materie_aux);
    					$idmaterie = $row_materie['IdMaterie'];
						if($query2 = mysql_query("SELECT  Nota FROM note WHERE UserNameID = '$usernameid' and IdMaterie = '$idmaterie'"))
						{
							if($row2 = mysql_fetch_assoc($query2))
							{
								$nota = $row2['Nota'];
								$_SESSION['materie'.$nr]=$Nume_Materie;
								$_SESSION['nota'.$nr]=$nota;
								$nr++;
								if($nota == 0)
									echo "<td>" . '---' . "</td>";
								else
								if($nota < 5 )
								echo "<td> <font color=red><i>" . $nota . "</i></font></td>";
									else 
								echo "<td>" . $nota . "</td>";		
							}
							else
						echo "<td>" . '---' . "</td>";
						}		
						echo "</tr>";
					}					
				}
				mysql_free_result($query);
			}
			echo $nr;
	$_SESSION["nr"]=$nr-1;
	$_SESSION["pagina"]=3;
	$_SESSION["an"]=2;
	$_SESSION["sem"]=1;
	mysql_close($connection);
	echo 	'</table>';
	echo' <ul class="pagination modal-5">
  		<li><a href="page2" class="prev">&laquo</a></li>
  		<li><a href="page1">1</a></li>
  		<li> <a href="page2">2</a></li>
  		<li> <a href="page3" class="active">3</a></li>
  <li> <a href="page4">4</a></li>
  <li> <a href="page5">5</a></li>
  <li> <a href="page6">6</a></li>
  <li> <a href="page7">7</a></li>
  <li> <a href="page8">8</a></li>
  <li><a href="page4" class="next">&raquo;</a></li>
</ul>
	</div>
</body>
</html>';
}
	else
		 echo "<script type='text/javascript'>window.location='404';</script>";
?>