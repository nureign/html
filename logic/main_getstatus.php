<?php

$id = $_POST['id'];

if( !isset($id) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM project_members WHERE id = '$id';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$name = $row['name'];
		$level = $row['level'];
		$tendency = $row['tendency'];
		$hp = $row['hp'];
		$mental = $row['mental'];
		$exp = $row['exp'];
		$stat1 = $row['stat1'];
		$stat2 = $row['stat2'];
		$stat3 = $row['stat3'];
		$stat4 = $row['stat4'];
		$stat5 = $row['stat5'];
		$stat6 = $row['stat6'];
		$honor = $row['honor'];
		$ruby = $row['ruby'];
		$lefthand = $row['lefthand'];
		$righthand = $row['righthand'];
		$top = $row['top'];
		$pants = $row['pants'];
		$shoes = $row['shoes'];
		$accessory = $row['accessory'];
	}

	echo json_encode(	array('name'=>$name, 'level'=>$level, 'tendency'=>$tendency, 'hp'=>$hp, 'mental'=>$mental, 'exp'=>$exp, 'stat1'=>$stat1, 'stat2'=>$stat2, 'stat3'=>$stat3, 'stat4'=>$stat4, 'stat5'=>$stat5, 'stat6'=>$stat6, 'honor'=>$honor, 'ruby'=>$ruby, 'lefthand'=>$lefthand, 'righthand'=>$righthand, 'top'=>$top, 'pants'=>$pants, 'shoes'=>$shoes, 'accessory'=>$accessory)	);
}

$mysqli->close();

?>