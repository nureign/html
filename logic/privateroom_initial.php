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
	/*$name = $row['name'];
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
	$intro = $row['intro'];*/
}

$sql = "SELECT * FROM inventory WHERE id = '$id';";
$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

while( $row = $result->fetch_assoc() )
{
	$inventory[] = $row;
}

for( $i=0; $i<count($inventory); $i++ )
{
	$sql = "SELECT * FROM " . $inventory[$i]['table_name'] . " WHERE no = " . $inventory[$i]['no'];
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$inventory[$i][] = $row;
	}
}

$myinfo[0]['low_power'] = 0;
$myinfo[0]['max_power'] = 0;
$myinfo[0]['defense'] = 0;

for( $i=0; $i<count($inventory); $i++ )
{
	if( $inventory[$i]['table_name'] != 'character_item' )
		continue;
	
	$myinfo[0]['low_power'] += $inventory[$i][0]['low_power'];
	$myinfo[0]['max_power'] += $inventory[$i][0]['max_power'];
	$myinfo[0]['defense'] += $inventory[$i][0]['defense'];
}

$myinfo[0]['low_power'] += $myinfo[0]['stat1'];
$myinfo[0]['max_power'] += $myinfo[0]['stat1']*2;
$myinfo[0]['defense'] += $myinfo[0]['stat2'];

?>