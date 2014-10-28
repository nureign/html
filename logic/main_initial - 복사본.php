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
	$myinfo[] = $row;
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

if( $exp_model[$myinfo[0]['level']] <= $myinfo[0]['exp'] )
{
	$myinfo[0]['level']++;
	$maxhp = $hp_model[$myinfo[0]['level']];
	$sql = "UPDATE project_members SET level = '".$myinfo[0]['level']."', hp = '".$myinfo[0]['maxhp']."', maxhp = '".$myinfo[0]['maxhp']."' WHERE id = '$id';";
	$mysqli->query($sql);
}

$hp_per = floor($myinfo[0]['hp'] / $myinfo[0]['maxhp'] * 100);
$mental_per = floor($myinfo[0]['mental'] / $myinfo[0]['mental'] * 100);
$exp_per = floor($myinfo[0]['exp'] / $exp_model[$myinfo[0]['level']] * 100);

?>