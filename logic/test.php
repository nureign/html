<?php
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	/*
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);
	
	for( $i=1; $i<=50; $i++ )
	{
		$sql = "INSERT INTO popular (table_name, no, popular) VALUES ('character_item', '$i', 0);";
		$mysqli->query($sql);
	}
	*/
	/*$max_level = 100;

	$exp = array();
	for($i=0; $i<$max_level; $i++)
	{
		$exp[$i] = floor( pow( $i, 2 ) * ( pow( ($i+1), 2 ) - ( ($i+1) * 13 ) + 82 ));
	}

	$exp_model = json_encode($exp);
	$sql = "INSERT INTO config ( name, config ) VALUES ( 'exp', '$exp_model' ) ON DUPLICATE KEY UPDATE config = '$exp_model';";
	$mysqli->query($sql);

	$hp = array();
	for($i=0; $i<$max_level; $i++)
	{
		$hp[$i] = floor( $i * 100 );
	}
	$hp_model = json_encode($hp);
	$sql = "INSERT INTO config ( name, config ) VALUES ( 'maxhp', '$hp_model' ) ON DUPLICATE KEY UPDATE config = '$hp_model';";
	$mysqli->query($sql);
	*/
	$res = json_encode(array(
		0,500,100,1500,2000,2500,3000,3500,4000,4500));
	$sql = "INSERT INTO config ( name, config ) VALUES ( 'do_price', '$res' ) ON DUPLICATE KEY UPDATE config = '$res';";
	$mysqli->query($sql);

	echo $res;

	

}

$mysqli->close();
?>