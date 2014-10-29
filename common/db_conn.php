<?
	$DB = array( 
		'host' => 'localhost',
		'id' => 'project',
		'pw' => 'project!',
		'db' => 'project'
	);
	
	$mysqli = mysqli_init();

	if( !( $mysqli->real_connect($DB['host'], $DB['id'], $DB['pw'], $DB['db']) ) )
	{
		exit('Connect Error');
	}
?>