<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
	exit;

$sql = "SET NAMES UTF8";
$mysqli->query($sql);

$sql = "SELECT character_item.*, popular.popular FROM character_item INNER JOIN popular ON character_item.no = popular.no AND popular.table_name = 'character_item' WHERE character_item.level <= '" . $_SESSION['myinfo']['level'] . "';";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_array() )
{
	$character_item[] = $row;
}

?>