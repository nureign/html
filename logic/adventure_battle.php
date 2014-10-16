<?php

$data = json_decode($_POST['data'], true);

if( !isset($data) )
{
	exit;
}

for($i=0; $i<20; $i++)
{
	if( $i == 0 )
	{
		// 첫턴
	}
	else if( $i == 20 )
	{
		// 막턴
	}
	else
	{
		// 중간턴
	}
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
		$p_level = $row['level'];
		$p_hp = $row['hp'];
		$p_mental = $row['mental'];
		$p_stat1 = $row['stat1'];
		$p_stat2 = $row['stat2'];
		$p_stat3 = $row['stat3'];
		$p_stat4 = $row['stat4'];
		$p_stat5 = $row['stat5'];
		$p_stat6 = $row['stat6'];
	}

	$sql = "SELECT * FROM monster WHERE level >= $p_level-3 AND level <= $p_level+3 ORDER BY RAND() LIMIT 1;";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$m_name = $row['name'];
		$m_image = $row['image'];
		$m_sound_start = $row['sound_start'];
		$m_level = $row['level'];
		$m_planet = $row['planet'];
		$m_location = $row['location'];
		$m_hp = $row['hp'];
		$m_type = $row['type'];
		$m_resource = $row['resource'];
	}

	echo json_encode(array(
		'p_level' => $p_level,
		'p_hp' => $p_hp,
		'p_mental' => $p_mental,
		'p_stat1' => $p_stat1,
		'p_stat2' => $p_stat2,
		'p_stat3' => $p_stat3,
		'p_stat4' => $p_stat4,
		'p_stat5' => $p_stat5,
		'p_stat6' => $p_stat6,

		'm_name' => $m_name,
		'm_image' => $m_image,
		'm_sound_start' => $m_sound_start,
		'm_level' => $m_level,
		'm_planet' => $m_planet,
		'm_location' => $m_location,
		'm_hp' => $m_hp,
		'm_type' => $m_type,
		'm_resource' => $m_resource
	));
}

$mysqli->close();

?>