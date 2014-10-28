<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
{
	exit;
}

$sql = "SET NAMES UTF8";
$mysqli->query($sql);

$sql = "SELECT * FROM base WHERE id = '$id';";
$result = $mysqli->query($sql);

while( $row = $result->fetch_array() )
{
	$mybase[] = $row;
}

$sql = "SELECT name FROM base_item WHERE baseitem_no = '" . $mybase[0]['defense1'] . "';";
$result = $mysqli->query($sql);

while ($row = $result->fetch_array() )
{
	$defense1 = $row['name'];
}

$sql = "SELECT name FROM base_item WHERE baseitem_no = '" . $mybase[0]['defense2'] . "';";
$result = $mysqli->query($sql);

while ($row = $result->fetch_array() )
{
	$defense2 = $row['name'];
}

$sql = "SELECT name FROM base_item WHERE baseitem_no = '" . $mybase[0]['defense3'] . "';";
$result = $mysqli->query($sql);

while ($row = $result->fetch_array() )
{
	$defense3 = $row['name'];
}

$sql = "SELECT name FROM base_item WHERE baseitem_no = '" . $mybase[0]['wall'] . "';";
$result = $mysqli->query($sql);

while ($row = $result->fetch_array() )
{
	$wall = $row['name'];
}

?>