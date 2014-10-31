<?php

session_start();

include_once "../common/session_info.php";

$id = $_SESSION['id'];
$item = $_POST['item'];

if( !isset($id) )
	exit;

$ruby = $_SESSION['myinfo']['ruby'];

switch( $item )
{
	case 'commandcenter':
		$price = $_SESSION['cc_price'][$_SESSION['base']['commandcenter']];
		break;
	case 'rader':
		$price = $_SESSION['ra_price'][$_SESSION['base']['rader']];
		break;
	case 'department':
		$price = $_SESSION['de_price'][$_SESSION['base']['department']];
		break;
	case 'dorm':
		$price = $_SESSION['do_price'][$_SESSION['base']['dorm']];
		break;
}

if( $ruby < $price )
{
	echo 'not enough ruby';
	return;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);
	
	switch( $item )
	{
		case 'commandcenter':
			$sql = "UPDATE base SET commandcenter = commandcenter + 1 WHERE id = '$id';";
			$mysqli->query($sql);
			break;
		case 'rader':
			$sql = "UPDATE base SET rader = rader + 1 WHERE id = '$id';";
			$mysqli->query($sql);
			break;
		case 'department':
			$sql = "UPDATE base SET department = department + 1 WHERE id = '$id';";
			$mysqli->query($sql);
			break;
		case 'dorm':
			$sql = "UPDATE base SET dorm = dorm + 1 WHERE id = '$id';";
			$mysqli->query($sql);
			break;
	}

	$sql = "UPDATE project_members SET ruby = ruby - '$price' WHERE id = '$id';";
	$mysqli->query($sql);
	
	session_refresh();

	$res = array(
		'commandcenter' => $_SESSION['base']['commandcenter']
	);

	echo json_encode($res);
}

$mysqli->close();

?>