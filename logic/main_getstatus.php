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
		$hp = $row['hp'];
		$maxhp = $row['maxhp'];
		$mental = $row['mental'];
	}

	$hp += floor($maxhp * 0.02);
	if( $hp > $maxhp ) $hp = $maxhp;
	
	$sql = "UPDATE project_members SET hp = '$hp' WHERE id = '$id';";
	$mysqli->query($sql);
	
	$hp_per = floor($hp / $maxhp * 100);
	$mental_per = floor($mental / $mental * 100);

	echo json_encode(array(
		'hp'=>$hp, 
		'maxhp' => $maxhp,
		'mental'=>$mental, 
		'hp_per' => $hp_per,
		'mental_per' => $mental_per
	));
}

$mysqli->close();

?>