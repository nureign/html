<?php

$name = $_POST['name'];

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SELECT * FROM project_members WHERE name = '$name';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$dbname = $row['name'];
	}

	echo $dbname;
}

$mysqli->close();

?>