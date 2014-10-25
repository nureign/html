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
	$stat1 = $row['stat1'];
	$stat2 = $row['stat2'];
	$stat3 = $row['stat3'];
	$stat4 = $row['stat4'];
	$stat5 = $row['stat5'];
	$stat6 = $row['stat6'];
	$lefthand = $row['lefthand'];
	$righthand = $row['righthand'];
	$top = $row['top'];
	$pants = $row['pants'];
	$shoes = $row['shoes'];
	$accessory = $row['accessory'];
	$intro = $row['intro'];
}

?>