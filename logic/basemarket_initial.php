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
	$myinfo[] = $row;
}

$sql = "SELECT base_item.*, popular.popular FROM base_item INNER JOIN popular ON base_item.no = popular.no AND popular.table_name = 'base_item' WHERE base_item.level <= '".$myinfo[0]['level']."';";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_array() )
{
	$base_item[] = $row;
}

?>