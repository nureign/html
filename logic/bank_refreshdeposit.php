<?php

$id = $_POST['id'];

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT ruby, bank FROM project_members WHERE id = '$id';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
	
	while( $row = $result->fetch_assoc() )
	{
		$mine[] = $row;
	}

	$sql = "SELECT * FROM banking WHERE id = '$id' AND type = '입금' ORDER BY date DESC LIMIT 5;";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
	
	while( $row = $result->fetch_assoc() )
	{
		$deposit[] = $row;
	}

	$sql = "SELECT name, intro, bank FROM project_members ORDER BY bank DESC LIMIT 5;";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$deposit_top5[] = $row;
	}
	
	$res = array( 'mine' => $mine, 'deposit' => $deposit, 'deposit_top5' => $deposit_top5 );
	echo json_encode($res);
}

$mysqli->close();

?>