<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
	exit;

$sql = "SET NAMES UTF8";
$mysqli->query($sql);

?>