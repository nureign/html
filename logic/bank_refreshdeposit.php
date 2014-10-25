<?php

$id = $_POST['id'];

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM banking WHERE id = '$id' AND type = '입금' ORDER BY date DESC LIMIT 5;";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$deposit[] = $row;
	}

	echo json_encode($deposit);
}

$mysqli->close();

?>