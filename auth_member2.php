<?php

$email = $_POST['email'];

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SELECT * FROM project_authcode WHERE email = '$email';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$code = $row['code'];
	}

	echo $code;
}

$mysqli->close();

?>