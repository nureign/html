<?php

session_start();

$id = $_SESSION['id'];
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

	$partslist = array();

	for( $i=0; $i<count($_SESSION['inventory']); $i++ )
	{
		if( $_SESSION['inventory'][$i]['info']['type'] == $parts )
			array_push($partslist, $_SESSION['inventory'][$i]['info']['name']);
	}
	
	echo json_encode($partslist);
}

$mysql->close();

?>