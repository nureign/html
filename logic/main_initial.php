<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
{
	exit;
}

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

$hp_per = floor($hp / $maxhp * 100);
$mental_per = floor($mental / $mental * 100);
$exp_per = floor($exp / $exp_model[$level] * 100);

?>