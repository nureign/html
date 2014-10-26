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

	$sql = "SELECT * FROM banking WHERE id = '$id' AND (type = '출금' OR type = '전산오류') ORDER BY date DESC LIMIT 5;";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$withdraw[] = $row;
	}

	$sql = "SELECT name, intro FROM project_members WHERE id = (SELECT id FROM banking ORDER BY COUNT(type = '전산오류') DESC LIMIT 5);";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$withdraw_top5[] = $row;
	}
	
	$res = array( 'mine' => $mine, 'withdraw' => $withdraw, 'withdraw_top5' => $withdraw_top5 );
	echo json_encode($res);
}

$mysqli->close();

?>