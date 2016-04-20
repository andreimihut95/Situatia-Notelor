<?php
	session_start();
	if(isset($_SESSION['username']) && $_SESSION['username'] != "admin" )
	{
		echo '
			<html>
				<head>
					<title>Chart</title>
					<link rel="stylesheet" type="text/css" href="css/chart.css" />
					<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
					<script type="text/javascript" src="js/chart.js"></script>
				</head>
				<body>';
					echo '<h1>Anul '. $_SESSION['an'].', Semestrul '.$_SESSION['sem'].'</h1>';
					$nr=$_SESSION['nr'];
					for($i = 1 ; $i <= $nr ; $i++)
					{
						$nota = ($_SESSION["nota".$i]) *10;
						echo '
						<div class="holder">';
								echo '<div>'.$_SESSION['materie'.$i].'</div>';
  						echo	'<div class="bar" data-percent="'.$nota."%".'"></div>';
					echo	'</div>';
					}
					echo '<a href = page'.$_SESSION['pagina'].'>
								<img src="img/back.png" width="128" height="128"/></a>';
		echo	'	</body>
			</html>';
	}
	else
		echo "<script type='text/javascript'>window.location='404';</script>";
?>