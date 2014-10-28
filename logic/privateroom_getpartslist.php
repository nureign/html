<?php

$id = $_POST['id'];
$parts = $_POST['parts'];

if( $parts == 'lefthand' || $parts == 'righthand' )
	$parts = 'weapons';

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM inventory WHERE table_name = 'character_item' AND id = '$id';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$inventory[] = $row;
	}

	for( $i=0; $i<count($inventory); $i++ )
	{
		$sql = "SELECT * FROM character_item WHERE type = '$parts' AND no = " . $inventory[$i]['no'];
		$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

		while( $row = $result->fetch_assoc() )
		{
			$inventory[$i][] = $row;
		}
	}
	
	echo json_encode($inventory);
}

?>