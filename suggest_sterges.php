<?php
	if(!isset($_REQUEST['term']))
    	exit;
	$connection = mysql_connect('localhost', 'root', '') or die( mysql_error() );
	mysql_select_db('proiect' , $connection) or die(mysql_error());	
	$query = mysql_query('SELECT userName, Nume, Prenume from username where userName like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by Nume asc limit 0,10', $connection);
	$data = array();
	if ( $query && mysql_num_rows($query) )
	{
    	while( $row = mysql_fetch_array($query, MYSQL_ASSOC) )
    	{
        	$data[] = array(
            	'label' => $row['userName'] .', '. $row['Nume'] .' '. $row['Prenume'] ,
            	'value' => $row['userName']
        );
    }
}
	echo json_encode($data);
	flush();
?>
