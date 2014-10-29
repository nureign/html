<?php

session_start();

include_once "../common/session_info.php";

$id = $_SESSION['id'];
$def1 = $_POST['def1'];
$def2 = $_POST['def2'];
$def3 = $_POST['def3'];
$def4 = $_POST['def4'];

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "UPDATE inventory SET equip = 0, slot = '' WHERE id = '$id' AND table_name = 'base_item';";
	$mysqli->query($sql);

	if( $def1 > 0 )
	{
		$sql = "UPDATE inventory SET equip = 1, slot = 'defense1' WHERE id = '$id' AND table_name = 'base_item' AND no = '$def1';";
		$mysqli->query($sql);
	}

	if( $def2 > 0 )
	{
		$sql = "UPDATE inventory SET equip = 1, slot = 'defense2' WHERE id = '$id' AND table_name = 'base_item' AND no = '$def2';";
		$mysqli->query($sql);
	}

	if( $def3 > 0 )
	{
		$sql = "UPDATE inventory SET equip = 1, slot = 'defense3' WHERE id = '$id' AND table_name = 'base_item' AND no = '$def3';";
		$mysqli->query($sql);
	}

	if( $def4 > 0 )
	{
		$sql = "UPDATE inventory SET equip = 1, slot = 'defense4' WHERE id = '$id' AND table_name = 'base_item' AND no = '$def4';";
		$mysqli->query($sql);
	}

	session_refresh();
	
	$res = array( 'def1' => $_SESSION['myinfo']['defense1'],
		'def2' => $_SESSION['myinfo']['defense2'],
		'def3' => $_SESSION['myinfo']['defense3'],
		'def4' => $_SESSION['myinfo']['defense4'] );

	echo json_encode($res);
}

$mysqli->close();

?>