<?php
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	// 자원 정보 탐색
	$sql = "SELECT * FROM config WHERE name = 'resource';";
	$result = $result = $mysqli->query($sql);
	
	if( $row = $result->fetch_assoc() )
	{
		$res_model = json_decode($row['config'], true);
	}

	$sql = "SELECT * FROM resource;";
	$result = $mysqli->query($sql);

	while($row = $result->fetch_array())
	{
		$sql = "UPDATE project_members SET metal = metal + ".$row['metal'] * $res_model['metal'].",
										   copper = copper + ".$row['copper'] * $res_model['copper'].",
										   sin = sin + ".$row['sin'] * $res_model['sin'].",
										   lead = lead + ".$row['lead'] * $res_model['lead'].",
										   uranium = uranium + ".$row['uranium'] * $res_model['uranium'].",
										   titanium = titanium + ".$row['titanium'] * $res_model['titanium'].",
										   palladium = palladium + ".$row['palladium'] * $res_model['palladium']." WHERE id = '".$row['id']."';";
		$mysqli->query($sql);
	}
}

$mysqli->close();
?>