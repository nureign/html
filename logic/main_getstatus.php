<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$_SESSION['myinfo']['hp'] += floor($_SESSION['myinfo']['maxhp'] * 0.02);
	if( $_SESSION['myinfo']['hp'] > $_SESSION['myinfo']['maxhp'] ) $_SESSION['myinfo']['hp'] = $_SESSION['myinfo']['maxhp'];
	
	$sql = "UPDATE project_members SET hp = '" . $_SESSION['myinfo']['hp'] . "' WHERE id = '$id';";
	$mysqli->query($sql);
	
	$hp_per = floor($_SESSION['myinfo']['hp'] / $_SESSION['myinfo']['maxhp'] * 100);
	$mental_per = floor($_SESSION['myinfo']['mental'] / $_SESSION['myinfo']['mental'] * 100);

	echo json_encode(array(
		'hp' => $_SESSION['myinfo']['hp'], 
		'maxhp' => $_SESSION['myinfo']['maxhp'],
		'mental' => $_SESSION['myinfo']['mental'], 
		'hp_per' => $hp_per,
		'mental_per' => $mental_per
	));
}

$mysqli->close();

?>