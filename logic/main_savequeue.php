<?php

$id = $_POST['id'];

if( !isset($id) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM battlelog_queue WHERE id = '$id' LIMIT 1;";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$exp = $row['exp'];
		$sql = "UPDATE project_members exp += '$exp' WHERE id = '$id';";
		$mysqli->query($sql);
	}
}

$mysqli->close();

?>