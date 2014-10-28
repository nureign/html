<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
{
	exit;
}

$sql = "SET NAMES UTF8";
$mysqli->query($sql);

$sql = "SELECT grocery_item.*, popular.popular FROM grocery_item INNER JOIN popular ON grocery_item.no = popular.no AND popular.table_name = 'grocery_item' WHERE grocery_item.level <= '" . $_SESSION['myinfo']['level'] . "';";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_array() )
{
	$grocery_item[] = $row;
}

?>