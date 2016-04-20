<?php
	if(!isset($_REQUEST['term']))
    	exit;
	$connection = mysql_connect('localhost', 'root', '') or die( mysql_error() );
	mysql_select_db('proiect' , $connection) or die(mysql_error());	
	$query = mysql_query('SELECT * from materii where IdMaterie like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by IdMaterie asc limit 0,10', $connection);
	$data = array();
	if ( $query && mysql_num_rows($query) )
	{
    	while( $row = mysql_fetch_array($query, MYSQL_ASSOC) )
    	{
        	$data[] = array(
            	'label' => $row['IdMaterie'] .', '. $row['Materie'] ,
            	'value' => $row['IdMaterie'],
            	'numematerie'=> $row['Materie'],
            	'sem' =>$row['Semestru'],
            	'an' =>$row['An'],
            	'prof' =>$row['Profesor'],
            	'mail' =>$row['Mail']
        );
    }
}
	echo json_encode($data);
	flush();
?>
