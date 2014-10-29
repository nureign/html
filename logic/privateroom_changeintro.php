<?php

session_start();

$id = $_SESSION['id'];
$intro = $_POST['intro'];

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "UPDATE project_members SET intro = '$intro' WHERE id = '$id';";
	$mysqli->query($sql);

	echo 'success';
}

$mysqli->close();

?>