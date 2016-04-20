<?php
echo '
	<!DOCTYPE html>
	<html>';
		    echo '<head>';
			echo "<title>Bun venit," .$username."</title>";
			echo '<link href="css/style_numerotare.css" rel="stylesheet" type="text/css">
		</head>
	<body>
		<div class="table-title">
			<h3>Situatia notelor</h3>
		</div>
		<table class="table-fill">
		<thead>
			<tr>
				<th>Materie</th>
				<th>Nota finala</th>
			</tr>
		</thead>
		<tbody class="table-hover">
		<tr>
			<td >Algebra si Geometrie</td>
			<td>0</td>
		</tr>
		<tr>
			<td>Analiza Matematica</td>
			<td>0</td>
		</tr>
		</tbody>
		</table>
	<ul class="pagination modal-5">
  		<li><a href="#" class="prev fa fa-arrow-left"> </a></li>
  		<li> <a href="#" class = "active">1</a></li>
  		<li> <a href="#">2</a></li>
  		<li> <a href="#">3</a></li>
  		<li> <a href="#">4</a></li>
 	    <li><a href="#">5</a></li>
 	  	<li> <a href="#">6</a></li>
	  	<li> <a href="#">7</a></li>
  		<li> <a href="#">8</a></li>
  		<li><a href="#" class="next fa fa-arrow-right"></a></li>
	</ul>
	</div>
</body>
</html>';
?>