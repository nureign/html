<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
{
	exit;
}

$sql = "SET NAMES UTF8";
$mysqli->query($sql);

$sql = "SELECT * FROM project_members WHERE id = '$id';";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_array() )
{
	$name = $row['name'];
	$ruby = $row['ruby'];
	$bank = $row['bank'];
}

$sql = "SELECT * FROM banking WHERE id = '$id' AND type = '입금' ORDER BY date DESC LIMIT 5;";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_assoc() )
{
	$deposit[] = $row;
}

$sql = "SELECT * FROM banking WHERE id = '$id' AND (type = '출금' OR type = '전산오류') ORDER BY date DESC LIMIT 5;";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_assoc() )
{
	$withdraw[] = $row;
}

$sql = "SELECT name, intro, bank FROM project_members ORDER BY bank DESC LIMIT 5;";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_assoc() )
{
	$deposit_top5[] = $row;
}

$sql = "SELECT name, intro FROM project_members WHERE id = (SELECT id FROM banking ORDER BY COUNT(type = '전산오류') DESC LIMIT 5);";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_assoc() )
{
	$withdraw_top5[] = $row;
}

?>