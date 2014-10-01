<?php

$email = $_POST['email'];

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SELECT * FROM project_members WHERE email_address = '$email';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$dbname = $row['email_address'];
	}

	echo $dbname;
}

$mysqli->close();

?>