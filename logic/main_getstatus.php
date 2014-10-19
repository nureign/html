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

	$sql = "SELECT * FROM battlelog_queue WHERE id = '$id' LIMIT 1;";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$exp = $row['exp'];
		$ruby = $row['ruby'];
		$hp = $row['hp'];
		$sql = "UPDATE project_members SET exp = exp + '$exp', ruby = ruby + '$ruby', hp = '$hp' WHERE id = '$id';";
		$mysqli->query($sql);
		$sql = "DELETE FROM battlelog_queue WHERE id = '$id';";
		$mysqli->query($sql);
	}

	$sql = "SELECT * FROM project_members WHERE id = '$id';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$name = $row['name'];
		$class = $row['class'];
		$level = $row['level'];
		$tendency = $row['tendency'];
		$hp = $row['hp'];
		$maxhp = $row['maxhp'];
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
		$intro = $row['intro'];
	}

	$sql = "SELECT * FROM config WHERE name = 'exp' OR name = 'maxhp';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		if( $row['name'] == 'exp' )
			$exp_model = json_decode($row['config'], true);
		else if( $row['name'] == 'maxhp' )
			$hp_model = json_decode($row['config'], true);
	}

	if( $exp_model[$level] <= $exp )
	{
		$level++;
		$maxhp = $hp_model[$level];
		$sql = "UPDATE project_members SET level = '$level', hp = '$maxhp', maxhp = '$maxhp' WHERE id = '$id';";
		$mysqli->query($sql);
	}

	$hp += floor($maxhp * 0.02);
	if( $hp > $maxhp ) $hp = $maxhp;
	
	$sql = "UPDATE project_members SET hp = '$hp' WHERE id = '$id';";
	$mysqli->query($sql);

	echo json_encode(array(
		'name'=>$name, 
		'class' => $class,
		'level'=>$level, 
		'tendency'=>$tendency, 
		'hp'=>$hp, 
		'maxhp' => $maxhp,
		'mental'=>$mental, 
		'exp'=>$exp, 
		'stat1'=>$stat1, 'stat2'=>$stat2, 'stat3'=>$stat3, 'stat4'=>$stat4, 'stat5'=>$stat5, 'stat6'=>$stat6, 
		'honor'=>$honor, 
		'ruby'=>$ruby, 
		'lefthand'=>$lefthand, 'righthand'=>$righthand, 'top'=>$top, 'pants'=>$pants, 'shoes'=>$shoes, 'accessory'=>$accessory, 
		'intro'=>$intro
	));
}

$mysqli->close();

?>